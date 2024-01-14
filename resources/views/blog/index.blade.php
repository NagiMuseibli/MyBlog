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
                        @foreach ($posts as $post)
                            <div class="post-blog">
                                <div class="blog-image">
                                    <a href="{{ route('blog.show', $post->id) }}">
                                        <img src="{{ 'assets/images/includes/blog1.jpg' }}" alt="">
                                    </a>
                                </div> <!-- /.blog-image -->
                                <div class="blog-content">
                                    <span class="meta-date"><a href="#">28 February 2084</a></span>
                                    <span class="meta-comments"><a href="#">14 Comments</a></span>
                                    <span class="meta-author"><a href="#">Candy Sharp</a></span>
                                    <h3><a href="{{ route('blog.show', $post->id) }}">{{ $post->title }}</a></h3>
                                    <p class="light-text">{{ $post->excerpt }}</p>
                                    <p>{{ $post->body }}<a href="{{ route('blog.show', $post->id) }}">Continue
                                            Reading...</a></p>
                                </div> <!-- /.blog-content -->
                            </div> <!-- /.post-blog -->
                        @endforeach


                    </div> <!-- /.col-md-12 -->
                    <div class="col-md-12">
                        <ul class="pages">
                            {{ $posts->links() }}
                            {{-- <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">13</a></li> --}}
                        </ul>
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
                                            src="{{ 'assets/images/includes/blogthumb1.jpg' }}" alt=""></a>
                                </div>
                                <div class="content">
                                    <span>{{ $latestPost->created_at->format('d/m/Y') }}</span>
                                    <h4><a href="{{ route('blog.show', $latestPost->id) }}">{{ $latestPost->title }}</a>
                                    </h4>
                                </div>
                            </div> <!-- /.last-post -->
                        @endforeach
                    </div> <!-- /.sidebar -->
                </div> <!-- /.col-md-4 -->

            </div> <!-- /.row -->
        </div> <!-- /.container -->
    @endsection
