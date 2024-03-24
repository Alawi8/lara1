<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Failed to authenticate with Google.');
        }

        // يتم فحص ما إذا كان المستخدم مسجلاً في التطبيق بالفعل باستخدام بريده الإلكتروني
        $existingUser = User::where('email', $user->getEmail())->first();

        if ($existingUser) {
            // إذا كان المستخدم موجودًا بالفعل، سجل الدخول باستخدام Auth
            Auth::login($existingUser);
        } else {
            // إذا لم يكن المستخدم موجودًا، قم بإنشاء حساب جديد له
            $newUser = new User();
            $newUser->name = $user->getName();
            $newUser->email = $user->getEmail();
            // يمكنك إضافة المزيد من المعلومات إذا كانت متوفرة
            $newUser->save();

            // سجل الدخول باستخدام الحساب الجديد
            Auth::login($newUser);
        }

        // قم بتوجيه المستخدم إلى الصفحة التي ترغب في توجيهه إليها بعد تسجيل الدخول
        return redirect()->route('/')->with('success', 'Successfully logged in with Google.');
    }
}