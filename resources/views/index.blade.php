@extends('layouts.app')
@section('title')
    My Blog
@endsection

@section('view.index')
    {{-- <section id="homeIntro" class="parallax first-widget">
        <div class="parallax-overlay">
            <div class="container home-intro-content">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Choose the Optimal Workspace for Your Business</h2>
                        <p>We asked six entrepreneurs with drastically different office strategies for their advice
                            on<br> choosing a workspace. </p>
                        <a href="#" class="large-button white-color">Download Free <i
                                class="icon-button fa fa-download"></i></a>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.parallax-overlay -->
    </section> <!-- /#homeIntro -->

    <section class="cta clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="cta-title"><strong>Want to use Medigo?</strong> Go and download it on templatemo.com</h4>
                    <a href="#" class="main-button accent-color">Visit templatemo<i
                            class="icon-button fa fa-arrow-right"></i></a>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section> <!-- /.cta -->

    <section class="light-content services">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-4">
                    <div class="service-box-wrap">
                        <div class="service-icon-wrap">
                            <i class="fa fa-umbrella fa-2x"></i>
                        </div> <!-- /.service-icon-wrap -->
                        <div class="service-cnt-wrap">
                            <h3 class="service-title">Easy Theme Colors</h3>
                            <p>There are 4 color themes (blue, green, red, orange) and this one is blue.</p>
                        </div> <!-- /.service-cnt-wrap -->
                    </div> <!-- /.service-box-wrap -->
                </div> <!-- /.col-md-4 -->

                <div class="col-md-4 col-sm-4">
                    <div class="service-box-wrap">
                        <div class="service-icon-wrap">
                            <i class="fa fa-mobile-phone fa-2x"></i>
                        </div> <!-- /.service-icon-wrap -->
                        <div class="service-cnt-wrap">
                            <h3 class="service-title">Change Icons</h3>
                            <p>Check <a rel="nofollow" href="http://fontawesome.io/icons/" target="_blank">FontAwesome</a>
                                for your suitable icons. Example: &lt;i
                                class=&quot;fa fa-download&quot;&gt;&lt;/i&gt;</p>
                        </div> <!-- /.service-cnt-wrap -->
                    </div> <!-- /.service-box-wrap -->
                </div> <!-- /.col-md-4 -->

                <div class="col-md-4 col-sm-4">
                    <div class="service-box-wrap">
                        <div class="service-icon-wrap">
                            <i class="fa fa-pencil-square-o fa-2x"></i>
                        </div> <!-- /.service-icon-wrap -->
                        <div class="service-cnt-wrap">
                            <h3 class="service-title">Pixel Perfect Design</h3>
                            <p>Based on a 12 column grid system, with every pixel snapped.</p>
                        </div> <!-- /.service-cnt-wrap -->
                    </div> <!-- /.service-box-wrap -->
                </div> <!-- /.col-md-4 -->

            </div>

            <div class="row">

                <div class="col-md-4 col-sm-4">
                    <div class="service-box-wrap">
                        <div class="service-icon-wrap">
                            <i class="fa fa-code fa-2x"></i>
                        </div> <!-- /.service-icon-wrap -->
                        <div class="service-cnt-wrap">
                            <h3 class="service-title">Valid HTML5</h3>
                            <p>We offer validated html files and well commented code on our themes.</p>
                        </div> <!-- /.service-cnt-wrap -->
                    </div> <!-- /.service-box-wrap -->
                </div> <!-- /.col-md-4 -->

                <div class="col-md-4 col-sm-4">
                    <div class="service-box-wrap">
                        <div class="service-icon-wrap">
                            <i class="fa fa-eye-slash fa-2x"></i>
                        </div> <!-- /.service-icon-wrap -->
                        <div class="service-cnt-wrap">
                            <h3 class="service-title">Retina Ready</h3>
                            <p>Incredibly clean design provides you powerful way to grow your business.</p>
                        </div> <!-- /.service-cnt-wrap -->
                    </div> <!-- /.service-box-wrap -->
                </div> <!-- /.col-md-4 -->

                <div class="col-md-4 col-sm-4">
                    <div class="service-box-wrap">
                        <div class="service-icon-wrap">
                            <i class="fa fa-suitcase fa-2x"></i>
                        </div> <!-- /.service-icon-wrap -->
                        <div class="service-cnt-wrap">
                            <h3 class="service-title">Special Thanks</h3>
                            <p>Credit goes to <a rel="nofollow" href="http://unsplash.com" target="_blank">Unsplash</a> for
                                images used in this template.</p>
                        </div> <!-- /.service-cnt-wrap -->
                    </div> <!-- /.service-box-wrap -->
                </div> <!-- /.col-md-4 -->

            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section> <!-- /.services -->

    <section class="dark-content portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header">
                        <h2 class="section-title">Our Lovely Portfolio</h2>
                        <p class="section-desc">Everything you need to create a professional website.</p>
                    </div> <!-- /.section-header -->
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->

        <div id="portfolio-carousel" class="portfolio-carousel portfolio-holder">
            <div class="item">
                <div class="thumb-post">
                    <div class="overlay">
                        <div class="overlay-inner">
                            <div class="portfolio-infos">
                                <span class="meta-category">Dashboard Template</span>
                                <h3 class="portfolio-title"><a href="project-slideshow.html">Visual Admin</a></h3>
                            </div>
                            <div class="portfolio-expand">
                                <a class="fancybox" href="{{ 'assets/images/includes/project1.jpg' }}" title="Visual Admin">
                                    <i class="fa fa-expand"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <img src="{{ 'assets/images/includes/project1.jpg' }}" alt="Visual Admin">
                </div>
            </div> <!-- /.item -->
            <div class="item">
                <div class="thumb-post">
                    <div class="overlay">
                        <div class="overlay-inner">
                            <div class="portfolio-infos">
                                <span class="meta-category">Mobile Ready</span>
                                <h3 class="portfolio-title"><a href="project-slideshow.html">Compass Template</a></h3>
                            </div>
                            <div class="portfolio-expand">
                                <a class="fancybox" href="{{ 'assets/images/includes/project2.jpg' }}"
                                    title="Compass Template">
                                    <i class="fa fa-expand"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <img src="{{ 'assets/images/includes/project2.jpg' }}" alt="Compass Template">
                </div>
            </div> <!-- /.item -->
            <div class="item">
                <div class="thumb-post">
                    <div class="overlay">
                        <div class="overlay-inner">
                            <div class="portfolio-infos">
                                <span class="meta-category">Responsive Design</span>
                                <h3 class="portfolio-title"><a href="project-slideshow.html">Awesome Theme</a></h3>
                            </div>
                            <div class="portfolio-expand">
                                <a class="fancybox" href="{{ 'assets/images/includes/project3.jpg' }}"
                                    title="Awesome Theme">
                                    <i class="fa fa-expand"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <img src="{{ 'assets/images/includes/project3.jpg' }}" alt="Awesome Theme">
                </div>
            </div> <!-- /.item -->
            <div class="item">
                <div class="thumb-post">
                    <div class="overlay">
                        <div class="overlay-inner">
                            <div class="portfolio-infos">
                                <span class="meta-category">Portfolio</span>
                                <h3 class="portfolio-title"><a href="project-slideshow.html">Volton Personal Site</a>
                                </h3>
                            </div>
                            <div class="portfolio-expand">
                                <a class="fancybox" href="{{ 'assets/images/includes/project4.jpg' }}"
                                    title="Volton Personal Site">
                                    <i class="fa fa-expand"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <img src="{{ 'assets/images/includes/project4.jpg' }}" alt="Volton Personal Site">
                </div>
            </div> <!-- /.item -->
            <div class="item">
                <div class="thumb-post">
                    <div class="overlay">
                        <div class="overlay-inner">
                            <div class="portfolio-infos">
                                <span class="meta-category">Green</span>
                                <h3 class="portfolio-title"><a href="project-slideshow.html">Rectangle Design</a></h3>
                            </div>
                            <div class="portfolio-expand">
                                <a class="fancybox" href="{{ 'assets/images/includes/project5.jpg' }}"
                                    title="Rectangle Design">
                                    <i class="fa fa-expand"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <img src="{{ 'assets/images/includes/project5.jpg' }}" alt="Rectangle Design">
                </div>
            </div> <!-- /.item -->
            <div class="item">
                <div class="thumb-post">
                    <div class="overlay">
                        <div class="overlay-inner">
                            <div class="portfolio-infos">
                                <span class="meta-category">Portfolio</span>
                                <h3 class="portfolio-title"><a href="project-slideshow.html">Masonry Gallery</a></h3>
                            </div>
                            <div class="portfolio-expand">
                                <a class="fancybox" href="{{ 'assets/images/includes/project6.jpg' }}"
                                    title="Masonry Gallery">
                                    <i class="fa fa-expand"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <img src="{{ 'assets/images/includes/project6.jpg' }}" alt="Masonry Gallery">
                </div>
            </div> <!-- /.item -->
            <div class="item">
                <div class="thumb-post">
                    <div class="overlay">
                        <div class="overlay-inner">
                            <div class="portfolio-infos">
                                <span class="meta-category">Branding / Identity</span>
                                <h3 class="portfolio-title"><a href="project-slideshow.html">Gloss Template</a></h3>
                            </div>
                            <div class="portfolio-expand">
                                <a class="fancybox" href="{{ 'assets/images/includes/project7.jpg' }}"
                                    title="Gloss Template">
                                    <i class="fa fa-expand"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <img src="{{ 'assets/images/includes/project7.jpg' }}" alt="Gloss Template">
                </div>
            </div> <!-- /.item -->
        </div> <!-- /#owl-demo -->
    </section> <!-- /.portfolio-holder -->

    <section class="testimonials-widget">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="bxslider">
                        <div class="testimonial">
                            <div class="testimonial-content">
                                <span class="testimonial-author">Andy Colin - Architect</span>
                                <p class="testimonial-description">Thank you for all your good work in creating theme.
                                    They have a ‘presence’ which feels right.</p>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-content">
                                <span class="testimonial-author">Thomas Teddy - Design Writer</span>
                                <p class="testimonial-description">I love the logo. Particularly how the mark can stand
                                    on its own. Nice work! It feels tall and proud and powerful — and I love that.
                                    That’s what I was after.</p>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-content">
                                <span class="testimonial-author">John Willy - Developer</span>
                                <p class="testimonial-description">You’re pretty awesome to work with. Incredibly
                                    organized, easy to communicate with, responsive with next iterations, and beautiful
                                    work.</p>
                            </div>
                        </div>
                    </div> <!-- /.bxslider -->
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section> <!-- /.testimonials-widget -->

    <section class="light-content our-team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header">
                        <h2 class="section-title">Meet our happy staff</h2>
                        <p class="section-desc">Medigo is the automated way to keep track of what everyone is working
                            on.</p>
                    </div> <!-- /.section-header -->
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
        <div class="team-members">
            <div class="container">
                <div class="row">

                    <div class="col-md-4 col-sm-4">
                        <div class="team-member">
                            <div class="thumb-post">
                                <img src="{{ 'assets/images/includes/member1.jpg' }}" alt="">
                                <span class="member-role">Marketing Manager</span>
                            </div>
                            <div class="member-content">
                                <h4 class="member-name">Amy Groovy</h4>
                                <p>Duis vitae consequat neque. Nulla pharetra eleifend nulla. </p>
                            </div>
                        </div> <!-- /.team-member -->
                    </div> <!-- /.col-md-4 -->

                    <div class="col-md-4 col-sm-4">
                        <div class="team-member">
                            <div class="thumb-post">
                                <img src="{{ 'assets/images/includes/member2.jpg' }}" alt="">
                                <span class="member-role">Web Developer</span>
                            </div>
                            <div class="member-content">
                                <h4 class="member-name">Candy Sharp</h4>
                                <p>Duis vitae consequat neque. Nulla pharetra eleifend nulla. </p>
                            </div>
                        </div> <!-- /.team-member -->
                    </div> <!-- /.col-md-4 -->

                    <div class="col-md-4 col-sm-4">
                        <div class="team-member">
                            <div class="thumb-post">
                                <img src="{{ 'assets/images/includes/member3.jpg' }}" alt="">
                                <span class="member-role">Graphic Designer</span>
                            </div>
                            <div class="member-content">
                                <h4 class="member-name">Linda Master</h4>
                                <p>Duis vitae consequat neque. Nulla pharetra eleifend nulla. </p>
                            </div>
                        </div> <!-- /.team-member -->
                    </div> <!-- /.col-md-4 -->

                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.team-members -->
    </section> <!-- /.our-team -->

    <section id="blogPosts" class="parallax">
        <div class="parallax-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header">
                            <h2 class="section-title">Recent from our blog</h2>
                            <p class="section-desc">Everything you need to create a professional website.</p>
                        </div> <!-- /.section-header -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
                <div class="row latest-posts">
                    <div class="col-md-4 col-sm-6">
                        <div class="blog-post clearfix">
                            <div class="thumb-post">
                                <a href="blog-single.html"><img src="{{ 'assets/images/includes/blogthumb1.jpg' }}"
                                        alt="" class="img-circle"></a>
                            </div>
                            <div class="blog-post-content">
                                <h4 class="post-title"><a href="blog-single.html">Getting Creative With the Google
                                        Maps API</a></h4>
                                <span class="meta-post-date">12 February 2084</span>
                            </div>
                        </div> <!-- /.blog-post -->
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="blog-post clearfix">
                            <div class="thumb-post">
                                <a href="blog-single.html"><img src="{{ 'assets/images/includes/blogthumb2.jpg' }}"
                                        alt="" class="img-circle"></a>
                            </div>
                            <div class="blog-post-content">
                                <h4 class="post-title"><a href="blog-single.html">Design Deliverables – easily share
                                        project</a></h4>
                                <span class="meta-post-date">10 February 2084</span>
                            </div>
                        </div> <!-- /.blog-post -->
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="blog-post clearfix">
                            <div class="thumb-post">
                                <a href="blog-single.html"><img src="{{ 'assets/images/includes/blogthumb3.jpg' }}"
                                        alt="" class="img-circle"></a>
                            </div>
                            <div class="blog-post-content">
                                <h4 class="post-title"><a href="blog-single.html">Using Templates to Get Your Clients
                                        Thinking</a></h4>
                                <span class="meta-post-date">8 February 2084</span>
                            </div>
                        </div> <!-- /.blog-post -->
                    </div> <!-- /.col-md-4 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.parallax-overlay -->
    </section> <!-- /#blogPosts --> --}}
@endsection
