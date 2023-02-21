@extends('layouts.dashboard')

@section('title', 'Blog Categories')

@section('css')
    @include('inc.datatable-css')
@endsection

@section('header-content')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1> Blog Categories</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Blog Categories</li>
            </ol>
        </div>
    </div>
@endsection

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="card mb-4">
                    <div class="card-header bg-light">
                        <h2 class="card-title"> Blog Categories</h2>
                        <div class="card-tools">
                            @can('view blog category')
                                <a href="{{ route('blog-category.create') }}" class="btn btn-sm btn-secondary"><i
                                        class="fas fa-plus mr-2"></i>Add New Blog Category</a>
                            @endcan

                        </div>
                    </div>
                    <div class="card-body">
                        <table id="blog-categories-list" class="table table-sm table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    @canany(['view blog category', 'edit blog category', 'delete blog category'])
                                        <th>Actions</th>
                                    @endcanany
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogCategories as $blogCategory)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $blogCategory->name }}</td>
                                        @canany(['view blog category', 'edit blog category', 'delete blog category'])
                                            <td>
                                                <div class="d-flex">

                                                    @can('edit blog category')
                                                        <a href="{{ route('blog-category.edit', $blogCategory) }}"
                                                            class="btn btn-sm btn-info mr-2"><i
                                                                class="far fa-edit mr-1"></i>Edit</a>
                                                    @endcan

                                                    @can('delete blog category')
                                                        <form action="{{ route('blog-category.destroy', $blogCategory) }}" method="post">
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
    </div>
@endsection

@section('js')
    @include('inc.datatable-js')
    <script>
        $(document).ready(function() {
            $('#blog-categories-list').DataTable();
        });

        @if (Session::has('success'))
            toastr.options = {
                "progressBar": true
            }
            toastr.success("{{ session('success') }}");
        @endif
    </script>
@endsection
