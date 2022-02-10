@extends('layouts.app')

@section('title', 'Order Now')

@section('single-page-header')
    <section class="single-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Order Now</h2>
                    <ol class="breadcrumb header-bradcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('site-root') }}">Home</a></li>
                        <li class="breadcrumb-item active">Order Now</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section class="contact-us" id="contact">

        <div class="container">
            @if (session()->get('success'))
                <div class="alert alert-success alert-sm alert-dismissible fade show" role="alert">
                    <h5>{{ session()->get('success') }}</h5>
                    <button type="button" class="btn close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if (session()->get('error'))
                <div class="alert alert-danger alert-sm alert-dismissible fade show" role="alert">
                    <h5>{{ session()->get('error') }}</h5>
                    <button type="button" class="btn close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <form action="{{ route('processTransaction') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-custom">Process Transaction</button>
            </form>
        </div>
    </section>
@endsection
