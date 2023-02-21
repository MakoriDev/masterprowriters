@extends('layouts.dashboard')

@section('title', 'Blogs')

@section('css')
    @include('inc.datatable-css')
@endsection

@section('header-content')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1> Blogs</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Blogs</li>
            </ol>
        </div>
    </div>
@endsection

@section('main-content')
    <div class="row">
        <div class="col-12">

            <div class="card mb-4">
                <div class="card-header bg-light">
                    <h2 class="card-title"> Blogs</h2>
                    <div class="card-tools">
                        @can('add blog')
                            <a href="{{ route('blog.create') }}" class="btn btn-sm btn-secondary"><i
                                    class="fas fa-plus mr-2"></i>Add New Blog</a>
                        @endcan

                    </div>
                </div>
                <div class="card-body">
                    <table id="blogs-list" class="table table-sm table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Excerpt</th>
                                <th>Author</th>
                                <th>Created At</th>
                                @canany(['edit blog', 'delete blog'])
                                    <th>Actions</th>
                                @endcanany
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $blog->blogCategory->name }}</td>
                                    <td>
                                        <img src="{{ asset($blog->photo) }}" alt=""
                                            class="blog-thumbnail">
                                    </td>
                                    <td>{{ $blog->title }}</td>
                                    <td>{{ $blog->excerpt }}</td>
                                    <td>{{ $blog->author->name }}</td>
                                    <td>{{ $blog->created_at->format('Y-m-d H:i:s') }}</td>
                                    @canany(['edit blog', 'delete blog'])
                                        <td>
                                            <div class="d-flex">

                                                @can('edit blog')
                                                    <a href="{{ route('blog.edit', $blog) }}" class="btn btn-sm btn-info mr-2"><i
                                                            class="far fa-edit mr-1"></i>Edit</a>
                                                @endcan

                                                @can('delete blog')
                                                    <form action="{{ route('blog.destroy', $blog) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="shadow btn btn-sm btn-danger" type="submit">
                                                            <i class="fas fa-trash-alt mr-1"></i>Delete
                                                        </button>
                                                    </form>
                                                @endcan

                                            </div>
                                        </td>
                                    @endcanany()
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    @include('inc.datatable-js')
    <script>
        $(document).ready(function() {
            $('#blogs-list').DataTable();
        });

        @if (Session::has('success'))
            toastr.options = {
                "progressBar": true
            }
            toastr.success("{{ session('success') }}");
        @endif
    </script>
@endsection
