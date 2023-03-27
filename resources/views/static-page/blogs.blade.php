@extends('layouts.app')

@section('title', 'Blogs')

@section('single-page-header')
    <section class="single-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Blogs</h2>
                    <ol class="breadcrumb header-bradcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('site-root') }}" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section class="posts section">
        <div class="container">
            <div class="row">
                @forelse ($blogs as $blog)
                    <!-- single blog post -->
                    <article class="col-lg-4 col-md-6">
                        <div class="post-item">
                            <div class="media-wrapper">
                                <img loading="lazy" src="{{ asset($blog->photo) }}" alt="amazing caves coverimage"
                                    class="img-fluid">
                            </div>

                            <div class="content">
                                <h3><a href="single-post.html">{{ $blog->title }}</a></h3>
                                <p>{{ $blog->excerpt }}</p>
                                <a class="btn btn-main" href="{{ route('single-blog', $blog) }}">Read more</a>
                            </div>
                        </div>
                    </article>
                    <!-- /single blog post -->
                @empty
                    <p>Blog posts coming soon.</p>
                @endforelse
            </div>

            {{ $blogs->links() }}
        </div>
    </section>
@endsection
