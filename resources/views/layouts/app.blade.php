<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <!--
 Medigo Template
 http://www.templatemo.com/preview/templatemo_460_medigo
    -->

    <!-- Google Fonts -->
    <link href="http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700itali" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,500,200,100,600" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/misc.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/blue-scheme.css') }}">

    <!-- JavaScripts -->
    <script src="{{ URL::asset('assets/js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery-migrate-1.2.1.min.js') }}"></script>

    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}" type="image/x-icon" />

</head>

<body>
    <div class="responsive_menu">
        <ul class="main_menu">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="#">Portfolio</a></li>

            <li><a href="{{ route('blog.index') }}">Blog</a></li>

            <li><a href="archives.html">Archives</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul> <!-- /.main_menu -->
    </div> <!-- /.responsive_menu -->

    <header class="site-header clearfix">
        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <div class="pull-left logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ URL::asset('assets/images/logo.png') }}" alt="Medigo by templatemo">
                        </a>
                    </div> <!-- /.logo -->

                    <div class="main-navigation pull-right">

                        <nav class="main-nav visible-md visible-lg">
                            <ul class="sf-menu">
                                <li class="active"><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="#">Portfolio</a> </li>
                                <li><a href="{{ route('blog.index') }}">Blog</a> </li>
                                <li><a href="archives.html">Archives</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul> <!-- /.sf-menu -->
                        </nav> <!-- /.main-nav -->

                        <!-- This one in here is responsive menu for tablet and mobiles -->
                        <div class="responsive-navigation visible-sm visible-xs">
                            <a href="#nogo" class="menu-toggle-btn">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div> <!-- /responsive_navigation -->

                    </div> <!-- /.main-navigation -->

                </div> <!-- /.col-md-12 -->

            </div> <!-- /.row -->

        </div> <!-- /.container -->
    </header> <!-- /.site-header -->

    @yield('view.index')
    @yield('view.blog.index')
    @yield('view.blog.show')
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="footer-nav clearfix">
                        <ul class="footer-menu">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="blog.html">Blog Posts</a></li>
                            <li><a href="archives.html">Shortcodes</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul> <!-- /.footer-menu -->
                    </nav> <!-- /.footer-nav -->
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <p class="copyright-text">Copyright &copy; 2084 Company Name
                        | Design: templatemo</p>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </footer> <!-- /.site-footer -->

    <!-- Scripts -->
    <script src="{{ URL::asset('assets/js/min/plugins.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/min/medigo-custom.min.js') }}"></script>

</body>

</html>
