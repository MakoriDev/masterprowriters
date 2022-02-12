@extends('layouts.dashboard')
@section('title', 'Error 404 Page')
@section('header-content')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Error 404 Page</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Error 404 Page</li>
            </ol>
        </div>
    </div>
@endsection

@section('main-content')
    <div class="error-page">
        <h2 class="headline text-warning">404</h2>

        <div class="error-content">
            <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>

            <p>
                We could not find the page you were looking for.
                Meanwhile,<a href="{{ route('dashboard') }}">return to dashboard</a> or contact your administrator.
            </p>
        </div>
    </div>
@endsection
