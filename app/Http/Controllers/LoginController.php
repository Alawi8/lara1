<

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session ;
use Illuminate\Support\Facades\Hash;



class LoginController extends Controller
{

    public function index()
    {
        return view('home.auth.login');
    }


    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
    
        // يتم تحقق من الاعتمادات وقيمة "تذكرني" في محاولة واحدة
        if (Auth::attempt($credentials, $request->has('remember'))) {
            return redirect()->intended(route('home'))->withSuccess('Signed in');
        }
    
        // إذا فشلت محاولة تسجيل الدخول، يتم توجيه المستخدم إلى الصفحة الرئيسية مع رسالة نجاح
        return redirect()->intended(route('home'))->with('success', 'Sign-in failed');
    }
    public function registration()
    {
        return view('home.auth.register');
    }


    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]
        
    );

        $data = $request->all();
        $check = $this->create($data);

        return redirect('/auth/login')->with('success', 'Signed up successfully');
    }


    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }else{
            return redirect()->route('home')->with('success','are not allowed to access');
        }


    }

    public function show (){
        $users = User::all();
        return view('dash.components.users.index', compact('users'));
    }


    public function signOut()
    {
        Auth::logout();

        return Redirect()->route('home')->with('success', 'تمت العملية بنجاح');
    }
}