@extends('layouts.dashboard')
@section('title', 'Error 500 Page')
@section('header-content')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Error 500 Page</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Error 500 Page</li>
            </ol>
        </div>
    </div>
@endsection

@section('main-content')
    <div class="error-page">
        <h2 class="headline text-danger">500</h2>

        <div class="error-content">
            <h3><i class="fas fa-exclamation-triangle text-danger"></i> Oops! Something went wrong.</h3>

            <p>
                We will work on fixing that right away.
                Meanwhile,<a href="{{ route('dashboard') }}">return to dashboard</a> or contact your administrator.
            </p>
        </div>
    </div>
@endsection
