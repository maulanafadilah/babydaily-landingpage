<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Specific Meta
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Albireo is a creative one page HTML Template." />
    <meta name="keywords"
        content="HTML5, Template, Design, agency, app, blog, business, clean, creative, marketing, modern, multipurpose, portfolio, seo, startup, studio, trending" />
    <meta name="author" content="DesignsNinja" />

    <!-- Titles
    ================================================== -->
    <title>@yield('title')</title>

    <!-- STYLE -->
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')
    
</head>

<body data-spy="scroll" data-offset="170" data-target=".navigation-area">
    <!--********************************************************-->
    <!--********************* SITE CONTENT *********************-->
    <!--********************************************************-->
    <div class="site-content">

        <!-- NAVBAR -->
        @include('includes.navbar')
        <!-- CONTENT -->
        @yield('content')
        <!-- FOOTER -->
        @include('includes.footer')
    </div>
    <!--~~./ end site content ~~-->

        {{-- SCRIPT --}}
        @stack('prepend-script')
        @include('includes.script')
        @stack('addon-script')
</body>

</html>