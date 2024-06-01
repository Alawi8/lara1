

<footer class="footer">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">



    <section >
        <div>
            <a href="{{ route('home') }}"  title="الرئيسيه">
                <img id="bot"src="{{ asset('assets/img/bitmap.png') }}" width="40" height="40"
                    alt="{{ config('app.name') }}" />
            </a>

            <p>
                مشكاة هي مدونة تقنية، تهدف إلى تقديم الدعم في مجال انظمة الويب ، لجميع المهتمين ورواد الاعمال ،
                لتكون على اطلاع مستمر لاتنسى متابعة حساباتنا على مواقع التواصل .
            </p>

        </div>
        <div>
            <h6 class="text-uppercase mb-4 font-weight-bold">التواصل</h6>
            <p><i class="fas fa-home mr-3"></i>saudi arabia , makkah</p>
            <p><i class="fas fa-envelope mr-3"></i>support@meshcah.net</p>
            <p><i class="fas fa-phone mr-3"></i> +966567707868</p>
        </div>
        <div>
            <h6 title="روابط وسائل التواصل الاجتماعي - {{ config('app.name') }}"> التواصل الاجتماعي</h6>
            <!-- Twitter -->
            <a class="btn btn-floating m-1 shadow" style="background-color: #fff" href="https://twitter.com/alo0o0o01"
                title="رابط حساب منصة x " role="button"><i class="fa-brands fa-x-twitter"></i></a>

            <!-- Instagram -->
            <a class="btn btn-floating m-1 shadow" style="background-color: #fff"
                href="https://www.instagram.com/meshcah2/" title="رابط حساب انستقرام" role="button"><i
                    class="fab fa-instagram"></i></a>

            <!-- Linkedin -->
            <!-- Github -->
            <a class="btn btn-floating m-1 shadow" style="background-color: #fff" href="https://t.me/webArabic1"
                title="رابط حساب telegram" role="button"><i class="fa-brands fa-telegram"></i></a>
            <!-- Whatsapp -->
            <a class="btn btn-floating m-1  shadow" style="background-color: #fff"
                href="https://chat.whatsapp.com/BSzG215opvWBP8b4yorJeo" title="رابط حساب واتساب" role="button"><i
                    class="fab fa-whatsapp"></i></a>

        </div>
    </section>
    

</footer>
<div class="text-center p-3 ">
    جميع الحقوق محفوظة © 2018-{{ date('Y') }}
</div>
