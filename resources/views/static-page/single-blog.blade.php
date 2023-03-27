@extends('layouts.app')

@section('title', 'Blogs Details')

@section('single-page-header')
    <section class="single-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Blog Details</h2>
                    <ol class="breadcrumb header-bradcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('site-root') }}" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <!-- blog details part start -->
    <section class="blog-details section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <article class="post">
                        <div class="post-image mb-5">
                            <img loading="lazy" class="img-fluid w-100" src="{{ asset($blog->photo) }}" alt="post-image">
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <h3>{{ $blog->title }}</h3>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="index.html">{{ $blog->author->name }}</a>
                                </li>
                            </ul>
                            {!! $blog->description !!}
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <!-- sidebar -->
                    <aside class="sidebar pl-0 pl-lg-4">
                        <div class="widget-post widget">
                            <h2>Latest Post</h2>
                            <!-- latest post -->
                            <ul class="widget-post-list">
                                @foreach ($latestPosts as $latestPost)
                                <li class="widget-post-list-item">
                                    <div class="widget-post-image">
                                        <a href="single-post.html">
                                            <img loading="lazy" src="{{ asset($latestPost->photo) }}" alt="post-img">
                                        </a>
                                    </div>
                                    <div class="widget-post-content">
                                        <a href="single-post.html">
                                            <h5>{{ $latestPost->excerpt }}</h5>
                                        </a>
                                        <h6>{{ $blog->created_at->format('M d, Y') }}</h6>
                                    </div>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- blog details part end -->
@endsection
