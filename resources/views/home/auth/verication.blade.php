@section('content')
<div>
    @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{ __('تم إرسال رابط التحقق إلى عنوان البريد الإلكتروني الخاص بك.') }}
        </div>
    @endif

    {{ __('قبل المتابعة، يرجى التحقق من بريدك الإلكتروني للحصول على رابط التحقق.') }}
    {{ __('إذا لم تستلم البريد الإلكتروني') }}, <a href="{{ route('verification.resend') }}">{{ __('انقر هنا لطلب آخر') }}</a>.
</div>

@endsection