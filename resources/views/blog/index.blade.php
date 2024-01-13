@extends('layouts.app')

@section('title')
    Bloqlar
@endsection

@section('view.blog.index')
    <div class="first-widget parallax" id="blog">
        <div class="parallax-overlay">
            <div class="container pageTitle">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <h2 class="page-title">Blog</h2>
                    </div> <!-- /.col-md-6 -->
                    <div class="col-md-6 col-sm-6 text-right">
                        <span class="page-location">Home / Blog</span>
                    </div> <!-- /.col-md-6 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.parallax-overlay -->
    </div> <!-- /.pageTitle -->

    <div class="container">
        <div class="row">

            <div class="col-md-8 blog-posts">
                <div class="row">
                    <div class="col-md-12">
                        <div class="post-blog">
                            <div class="blog-image">
                                <a href="blog-single.html">
                                    <img src="{{ 'assets/images/includes/blog1.jpg' }}" alt="">
                                </a>
                            </div> <!-- /.blog-image -->
                            <div class="blog-content">
                                <span class="meta-date"><a href="#">28 February 2084</a></span>
                                <span class="meta-comments"><a href="#">14 Comments</a></span>
                                <span class="meta-author"><a href="#">Candy Sharp</a></span>
                                <h3><a href="blog-single.html">Getting Creative With the Google Maps API</a></h3>
                                <p class="light-text">Sed consequat lobortis risus, in rutrum arcu tristique eget. Etiam
                                    accumsan lectus quis cursus porta. Etiam a turpis sed sapien malesuada pellentesque quis
                                    id tortor. Phasellus mattis quam enim, non accumsan nibh tincidunt sed.</p>
                                <p>Nunc ullamcorper nisi sit amet eros dictum, eget vulputate quam rhoncus. Nulla diam eros,
                                    ultrices id lacinia ut, aliquet sit amet erat. Duis ut nulla molestie, ullamcorper
                                    ligula eu, ultricies tortor. Suspendisse quis consequat a turpis sed sapien quis id
                                    tortor <a href="blog-single.html">Continue Reading...</a></p>
                            </div> <!-- /.blog-content -->
                        </div> <!-- /.post-blog -->
                        <div class="post-blog">
                            <div class="blog-image">
                                <a href="blog-single.html">
                                    <img src="{{ 'assets/images/includes/blog2.jpg' }}" alt="">
                                </a>
                            </div> <!-- /.blog-image -->
                            <div class="blog-content">
                                <span class="meta-date"><a href="#">24 February 2084</a></span>
                                <span class="meta-comments"><a href="#">32 Comments</a></span>
                                <span class="meta-author"><a href="#">Candy Sharp</a></span>
                                <h3><a href="blog-single.html">Bird Profile Wellington New Zealand</a></h3>
                                <p class="light-text">Sed consequat lobortis risus, in rutrum arcu tristique eget. Etiam
                                    accumsan lectus quis cursus porta. Etiam a turpis sed sapien malesuada pellentesque quis
                                    id tortor. Phasellus mattis quam enim, non accumsan nibh tincidunt sed.</p>
                                <p>Nunc ullamcorper nisi sit amet eros dictum, eget vulputate quam rhoncus. Nulla diam eros,
                                    ultrices id lacinia ut, aliquet sit amet erat. Duis ut nulla molestie, ullamcorper
                                    ligula eu, ultricies tortor. Suspendisse quis consequat a turpis sed sapien quis id
                                    tortor <a href="blog-single.html">Continue Reading...</a></p>
                            </div> <!-- /.blog-content -->
                        </div> <!-- /.post-blog -->
                        <div class="post-blog">
                            <div class="blog-image">
                                <a href="blog-single.html">
                                    <img src="{{ 'assets/images/includes/blog3.jpg' }}" alt="">
                                </a>
                            </div> <!-- /.blog-image -->
                            <div class="blog-content">
                                <span class="meta-date"><a href="#">20 February 2084</a></span>
                                <span class="meta-comments"><a href="#">64 Comments</a></span>
                                <span class="meta-author"><a href="#">Candy Sharp</a></span>
                                <h3><a href="blog-single.html">Standard Blog Post Formating Medigo</a></h3>
                                <p class="light-text">Sed consequat lobortis risus, in rutrum arcu tristique eget. Etiam
                                    accumsan lectus quis cursus porta. Etiam a turpis sed sapien malesuada pellentesque quis
                                    id tortor. Phasellus mattis quam enim, non accumsan nibh tincidunt sed.</p>
                                <p>Nunc ullamcorper nisi sit amet eros dictum, eget vulputate quam rhoncus. Nulla diam eros,
                                    ultrices id lacinia ut, aliquet sit amet erat. Duis ut nulla molestie, ullamcorper
                                    ligula eu, ultricies tortor. Suspendisse quis consequat a turpis sed sapien quis id
                                    tortor <a href="blog-single.html">Continue Reading...</a></p>
                            </div> <!-- /.blog-content -->
                        </div> <!-- /.post-blog -->
                        <div class="post-blog">
                            <div class="blog-image">
                                <a href="blog-single.html">
                                    <img src="{{ 'assets/images/includes/blog4.jpg' }}" alt="">
                                </a>
                            </div> <!-- /.blog-image -->
                            <div class="blog-content">
                                <span class="meta-date"><a href="#">24 February 2084</a></span>
                                <span class="meta-comments"><a href="#">128 Comments</a></span>
                                <span class="meta-author"><a href="#">Candy Sharp</a></span>
                                <h3><a href="blog-single.html">Hochbunker High Definition Photography</a></h3>
                                <p class="light-text">Sed consequat lobortis risus, in rutrum arcu tristique eget. Etiam
                                    accumsan lectus quis cursus porta. Etiam a turpis sed sapien malesuada pellentesque quis
                                    id tortor. Phasellus mattis quam enim, non accumsan nibh tincidunt sed.</p>
                                <p>Nunc ullamcorper nisi sit amet eros dictum, eget vulputate quam rhoncus. Nulla diam eros,
                                    ultrices id lacinia ut, aliquet sit amet erat. Duis ut nulla molestie, ullamcorper
                                    ligula eu, ultricies tortor. Suspendisse quis consequat a turpis sed sapien quis id
                                    tortor <a href="blog-single.html">Continue Reading...</a></p>
                            </div> <!-- /.blog-content -->
                        </div> <!-- /.post-blog -->
                    </div> <!-- /.col-md-12 -->
                    <div class="col-md-12">
                        <ul class="pages">
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">13</a></li>
                        </ul>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.col-md-8 -->

            <div class="col-md-4">
                <div class="sidebar">
                    <div class="sidebar-widget">
                        <h5 class="widget-title">Recent Posts</h5>
                        <div class="last-post clearfix">
                            <div class="thumb pull-left">
                                <a href="#"><img src="{{ 'assets/images/includes/blogthumb1.jpg' }}"
                                        alt=""></a>
                            </div>
                            <div class="content">
                                <span>24 February 2084</span>
                                <h4><a href="#">Standard Post Formating Medigo</a></h4>
                            </div>
                        </div> <!-- /.last-post -->
                        <div class="last-post clearfix">
                            <div class="thumb pull-left">
                                <a href="#"><img src="{{ 'assets/images/includes/blogthumb2.jpg' }}"
                                        alt=""></a>
                            </div>
                            <div class="content">
                                <span>24 February 2084</span>
                                <h4><a href="#">Standard Post Formating Medigo</a></h4>
                            </div>
                        </div> <!-- /.last-post -->
                        <div class="last-post clearfix">
                            <div class="thumb pull-left">
                                <a href="#"><img src="{{ 'assets/images/includes/blogthumb3.jpg' }}"
                                        alt=""></a>
                            </div>
                            <div class="content">
                                <span>24 February 2084</span>
                                <h4><a href="#">Standard Post Formating Medigo</a></h4>
                            </div>
                        </div> <!-- /.last-post -->
                    </div> <!-- /.sidebar-widget -->
                    <div class="sidebar-widget">
                        <h5 class="widget-title">Categories</h5>
                        <div class="row categories">
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="#">Standard</a></li>
                                    <li><a href="#">Audio</a></li>
                                    <li><a href="#">Video</a></li>
                                    <li><a href="#">Branding</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="#">iOS Design</a></li>
                                    <li><a href="#">Business</a></li>
                                </ul>
                            </div>
                        </div> <!-- /.row -->
                    </div> <!-- /.sidebar-widget -->
                    <div class="sidebar-widget">
                        <h5 class="widget-title">Flickr Feed</h5>
                        <ul id="flickr-feed" class="thumbs"></ul>
                    </div> <!-- /.sidebar-widget -->
                    <div class="sidebar-widget">
                        <h5 class="widget-title">Text Widget</h5>
                        <p class="light-text">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                            fermentum massa justo sit amet risus. Cum sociis natoque penatibus et magnis dis parturient…
                        </p>
                    </div> <!-- /.sidebar-widget -->
                </div> <!-- /.sidebar -->
            </div> <!-- /.col-md-4 -->

        </div> <!-- /.row -->
    </div> <!-- /.container -->
@endsection
