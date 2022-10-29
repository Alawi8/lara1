@extends('profile.layouts.header')

@section('content')
    
<div class="row">
    <div class="page-header breadcrumb-header  p-3 mr-2 ml-2 m-2">
        <div class="row align-items-end ">
            <div class="col-lg-8">
                <div class="page-header-title text-left-rtl">
                    <div class="d-inline">
                        <h3 class="lite-text ">يمين الى اليسار</h3>
                        <span class="lite-text text-gray">option of rtl and ltr </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item "><a href="#"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item "><a href="#">Customise</a></li>
                    <li class="breadcrumb-item active">rtl</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<div class="jumbotron shade pt-5">
    <h1>Right to Left</h1>
    <div class="d-flex justify-content-between p-2 bd-highlight c-grey font-weight-light font-italic">
        How to turn ltr to rtl. <button type="button" onclick="rtl()" data-toggle="button" aria-pressed="false"
            autocomplete="off" class="btn f-glass f-toggle-first outlined c-first o-first p-2 pr-3 pl-3">Right to
            Left</button></div>
    <hr class="hr-dashed">

    <h4 class="c-grey pt-3 pb-3">Code</h4>
    <p class="c-main font-weight-light font-italic"> Easy,just add rtl class to body! </p>

    <code class="c-grey">
        <code>
            << /code> body class=" <strong class=" c-danger">rtl</strong> " <code>></code>
        </code>

        <hr class="hr-dashed">
        <blockquote class="blockquote pt-3 pb-3">
            <h4 class="c-grey ">Text Position for Right to Left Language</h4>
            <footer class="blockquote-footer text-left-rtl lite-text "> basically this classes
                reverse
                right with left in rtl mode.</footer>
        </blockquote>
        <div class="bd-example c-grey">
            <p class="text-left-rtl">use the <span class="fnt-code c-primary ">text-left-rtl</span>
                class to have a <span class="c-third font-weight-bold ">left text.</span></p>
            <p class="text-right-rtl">use the <span class="fnt-code c-primary ">text-right-rtl</span>
                class to have a <span class="c-third font-weight-bold ">right text.</span></p>

        </div>
        <hr class="hr-dashed">

        <blockquote class="blockquote pt-3 pb-3">
            <h4 class="c-grey ">Static Text Position</h4>
            <footer class="blockquote-footer text-left-rtl lite-text "> static position of text.
            </footer>
        </blockquote>
        <div class="bd-example c-grey">
            <p class="text-left">use the <span class="fnt-code c-primary ">text-left</span> class to
                have a <span class="c-third font-weight-bold">left text.</span></p>
            <p class="text-center">use the <span class="fnt-code c-primary ">text-center</span>
                class to
                have a <span class="c-third font-weight-bold">center text.</span></p>
            <p class="text-right">use the <span class="fnt-code c-primary ">text-right</span> class
                to
                have a <span class="c-third font-weight-bold">right text.</span></p>

        </div>

        <hr class="hr-dashed">
        <blockquote class="blockquote pt-3 pb-3">
            <h4 class="c-grey ">Static Text Direction</h4>
            <footer class="blockquote-footer text-left-rtl lite-text "> force Direction of text.
            </footer>
        </blockquote>
        <div class="bd-example c-grey">

            <p class="text-dir-ltr text-left">This Text forced left to right using the class : <span
                    class="fnt-code c-primary ">text-dir-ltr</span> </p>
            <p class="text-dir-ltr text-left">این نوشته چپ چین است با استفاده از کلاس : <span
                    class="fnt-code c-primary ">text-dir-ltr</span> </p>

            <p class="text-dir-rtl text-right">این نوشته راستچین است با استفاده از کلاس : <span
                    class="fnt-code c-primary ">text-dir-ltr</span> </p>
            <p class="text-dir-rtl text-right">This Text forced right to left using the class :
                <span class="fnt-code c-primary ">text-dir-ltr</span>
            </p>


        </div>
</div>

@endsection