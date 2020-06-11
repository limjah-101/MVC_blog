<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    @include('admin.layout.head')
</head>
<body>


    <!-- Left Panel -->
    @include('admin.layout.leftPanel')
    <!-- end Left Panel -->

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        @include('admin.layout.header')

        <!-- dynamic content-->
        @yield('content')
        <!--end dynamic content-->

    </div><!-- right-panel -->
    <!-- end Right Panel -->

    @include('admin.layout.js')

</body>
</html>
