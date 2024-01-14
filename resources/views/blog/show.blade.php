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
                                <span class="meta-author"><a href="#blog-author">Created by:
                                        {{ $post->user->name }}</a></span>
                                <h3>{{ $post->title }}</h3>
                                <p>{{ $post->body }}</p>
                                {{-- <blockquote>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, quisquam, aut, eum,
                                    natus excepturi impedit ipsa rerum ratione id dolores ducimus minus eos quod veniam
                                    similique fugit illum error facilis!
                                </blockquote> --}}
                                {{-- <div class="tag-items">
                                    <span class="small-text">Tags:</span>
                                    <a href="#" rel="tag">business</a>
                                    <a href="#" rel="tag">html</a>
                                    <a href="#" rel="tag">education</a>
                                </div> --}}
                            </div> <!-- /.blog-content -->
                        </div> <!-- /.post-blog -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
                {{-- <div class="row">
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
                </div> <!-- /.row --> --}}
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
                                            <p>{{ $comment->body }}<span class="label label-primary">New</span></p>

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

                        @foreach ($latestPosts as $latestPost)
                            <div class="last-post clearfix">
                                <div class="thumb pull-left">
                                    <a href="{{ route('blog.show', $latestPost->id) }}"><img
                                            src="{{ URL::asset('assets/images/includes/blogthumb1.jpg') }}"
                                            alt=""></a>
                                </div>
                                <div class="content">
                                    <span>{{ $latestPost->updated_at->format('d/m/Y') }}</span>
                                    <h4><a href="{{ route('blog.show', $latestPost->id) }}">{{ $latestPost->title }}</a>
                                    </h4>
                                </div>
                            </div> <!-- /.last-post -->
                        @endforeach


                    </div> <!-- /.sidebar-widget -->


                </div> <!-- /.sidebar -->
            </div> <!-- /.col-md-4 -->

        </div> <!-- /.row -->
    </div> <!-- /.container -->
@endsection
