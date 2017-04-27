<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Administrator {{ Auth::user()->name }}</title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/4.2.0/css/font-awesome.min.css') }}" />

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/datepicker.min.css') }}" />
    @yield('css')
    <!-- text fonts -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/fonts.googleapis.com.css') }}" />

    <!-- ace styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/ace.min.css') }}" class="ace-main-stylesheet" id="main-ace-style" />

    <!-- inline styles related to this page -->
    @yield('styles')
    <!-- ace settings handler -->
    <script src="{{ asset('assets/js/ace-extra.min.js') }}"></script>
</head>

<body class="no-skin">
<div id="navbar" class="navbar navbar-default">
    <script type="text/javascript">
        try{ace.settings.check('navbar' , 'fixed')}catch(e){}
    </script>

    {{--navigation--}}
    @include('layouts.common.navigation')
</div>

{{--message--}}
@include('layouts.common.message')

<div class="main-container" id="main-container">
    <script type="text/javascript">
        try{ace.settings.check('main-container' , 'fixed')}catch(e){}
    </script>

    {{--sidebar--}}
    @include('layouts.common.sidebar')

    <div class="main-content">
        <div class="main-content-inner">

            {{--breadcumbs--}}
            @include('layouts.common.breadcumbs')

            <div class="page-content">
                <div class="row">
                    <div class="col-xs-12">
                        {{--content--}}
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--footer--}}
    @include('layouts.common.footer')

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
</div>

<!-- basic scripts -->

<!--[if !IE]> -->
<script src="{{ asset('assets/js/jquery.2.1.1.min.js') }}"></script>
<!-- <![endif]-->

<!--[if !IE]> -->
<script type="text/javascript">
    window.jQuery || document.write("<script src='{{ asset('assets/js/jquery.min.js') }}'>"+"<"+"/script>");
</script>
<!-- <![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='{{ asset('assets/js/jquery.mobile.custom.min.js') }}'>"+"<"+"/script>");
</script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<!-- page specific plugin scripts -->
<script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
@yield('js')
<!-- ace scripts -->
<script src="{{ asset('assets/js/ace-elements.min.js') }}"></script>
<script src="{{ asset('assets/js/ace.min.js') }}"></script>
<script>
    $(function() {
        $('.date-picker').datepicker({
            format: " yyyy", // Notice the Extra space at the beginning
            viewMode: "years",
            minViewMode: "years"
        });
    });
</script>
@yield('script')
<!-- inline scripts related to this page -->
</body>
</html>