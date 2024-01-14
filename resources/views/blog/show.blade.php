@extends('layouts.app')

@section('title')
    Bloq haqqında
@endsection

@section('view.blog.show')
    <div class="first-widget parallax" id="blogId">
        <div class="parallax-overlay">
            <div class="container pageTitle">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <h2 class="page-title">Blog Single</h2>
                    </div> <!-- /.col-md-6 -->
                    <div class="col-md-6 col-sm-6 text-right">
                        <span class="page-location">Home / Blog Single</span>
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
                                <img src="{{ URL::asset('assets/images/includes/blog2.jpg') }}" alt="">
                            </div> <!-- /.blog-image -->
                            <div class="blog-content">
                                <span class="meta-date"><a
                                        href="#">{{ $post->updated_at->format('d/m/Y') }}</a></span>
                                <span class="meta-comments"><a href="#blog-comments">{{ $comments->count() }}
                                        Comments</a></span>
                                <span class="meta-author"><a href="#blog-author"> {{ $post->user->name }}</a></span>
                                <h3>Standard Blog Post Formating Medigo</h3>
                                <p>Sed consequat lobortis risus, in rutrum arcu tristique eget. Etiam accumsan lectus quis
                                    cursus porta. Etiam a turpis sed sapien malesuada pellentesque quis id tortor. Phasellus
                                    mattis quam enim, non accumsan nibh tincidunt sed.</p>
                                <p>Nostrum, quibusdam, eaque, numquam, fuga dolores libero amet suscipit in saepe optio
                                    facilis aperiam nulla iste molestiae reprehenderit facere dolorem illum ea quam incidunt
                                    est quos odio. Aperiam, repellendus, at, eaque quas eligendi ut ipsum voluptate vero
                                    fugiat molestiae labore eius similique cumque necessitatibus sequi dolore quam enim
                                    nostrum.</p>
                                <blockquote>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, quisquam, aut, eum,
                                    natus excepturi impedit ipsa rerum ratione id dolores ducimus minus eos quod veniam
                                    similique fugit illum error facilis!
                                </blockquote>
                                <p>Culpa, iure, debitis, exercitationem, vitae aperiam excepturi explicabo distinctio ea
                                    nisi illo temporibus dignissimos praesentium dolorem reiciendis iste officiis odio nemo
                                    dolor illum laboriosam? Architecto, earum accusamus sequi distinctio veniam amet ea
                                    quibusdam eos sapiente!</p>
                                <div class="tag-items">
                                    <span class="small-text">Tags:</span>
                                    <a href="#" rel="tag">business</a>
                                    <a href="#" rel="tag">html</a>
                                    <a href="#" rel="tag">education</a>
                                </div>
                            </div> <!-- /.blog-content -->
                        </div> <!-- /.post-blog -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        <div id="blog-author" class="clearfix">
                            <a href="#" class="blog-author-img pull-left">
                                <img src="{{ URL::asset('assets/images/includes/author.png') }}" alt="">
                            </a>
                            <div class="blog-author-info">
                                <h4 class="author-name"><a href="#">Candy Sharp</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, quod, doloremque, quia
                                    cum maiores commodi consequatur dolore et dolores omnis officiis minus dolor ex quae
                                    incidunt veritatis.</p>
                            </div>
                        </div>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        <div id="blog-comments" class="blog-post-comments">
                            <h3>{{ $comments->count() }} Comments</h3>
                            <div class="blog-comments-content">
                                @foreach ($comments as $comment)
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="media-object"
                                                src="{{ URL::asset('assets/images/includes/comment1.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="media-heading">
                                                <h4>{{ $comment->user->name }}</h4>
                                                <a href="#"><span>4 weeks ago</span><span>Reply</span></a>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet lorem, elit. Sequi, nam magni repellendus! <span
                                                    class="label label-primary">New</span></p>

                                        </div>
                                    </div>
                                @endforeach


                            </div> <!-- /.blog-comments-content -->
                        </div> <!-- /.blog-post-comments -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="comment-form">
                            <h3>Leave a comment</h3>
                            <div class="widget-inner">
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p>
                                                <label for="name-id">Your Name:</label>
                                                <input type="text" id="name-id" name="name-id">
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <p>
                                                <label for="email-id">Email Address:</label>
                                                <input type="text" id="email-id" name="email-id">
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <p>
                                                <label for="site-id">Your Site:</label>
                                                <input type="text" id="site-id" name="site-id">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>
                                                <label for="comment">Your comment:</label>
                                                <textarea name="comment" id="comment" rows="5"></textarea>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input class="mainBtn" type="submit" name="submit" value="Submit Comment"
                                                id="submit">
                                        </div>
                                    </div>
                                </form>
                            </div> <!-- /.widget-inner -->
                        </div> <!-- /.widget-main -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.col-md-8 -->

            <div class="col-md-4">
                <div class="sidebar">
                    <div class="sidebar-widget">
                        <h5 class="widget-title">Recent Posts</h5>
                        <div class="last-post clearfix">
                            <div class="thumb pull-left">
                                <a href="#"><img src="{{ URL::asset('assets/images/includes/blogthumb1.jpg') }}"
                                        alt=""></a>
                            </div>
                            <div class="content">
                                <span>24 February 2084</span>
                                <h4><a href="#">Standard Post Formating Medigo</a></h4>
                            </div>
                        </div> <!-- /.last-post -->
                        <div class="last-post clearfix">
                            <div class="thumb pull-left">
                                <a href="#"><img src="{{ URL::asset('assets/images/includes/blogthumb2.jpg') }}"
                                        alt=""></a>
                            </div>
                            <div class="content">
                                <span>24 February 2084</span>
                                <h4><a href="#">Standard Post Formating Medigo</a></h4>
                            </div>
                        </div> <!-- /.last-post -->
                        <div class="last-post clearfix">
                            <div class="thumb pull-left">
                                <a href="#"><img src="{{ URL::asset('assets/images/includes/blogthumb3.jpg') }}"
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
