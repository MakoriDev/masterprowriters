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
            <div class="row">
                <div class="col-md-12">
                    <div class="title text-center">
                        <h2>Checkout Order Now</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate facilis eveniet maiores ab
                            maxime nam ut numquam molestiae quaerat incidunt?</p>
                        <div class="border"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    @if (session()->get('error'))
                        <div class="alert alert-danger alert-sm alert-dismissible fade show" role="alert">
                            <h5>{{ session()->get('error') }}</h5>
                            <button type="button" class="btn close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    @if (session()->get('success'))
                        <div class="alert alert-success alert-sm alert-dismissible fade show" role="alert">
                            <h5>{{ session()->get('success') }}</h5>
                            <button type="button" class="btn close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="alert alert-success alert-dismissible fade show d-none" id="successMessage">
                        <p></p>
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="alert alert-danger alert-dismissible fade show d-none" id="errorMessage">
                        <p></p>
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>


                <div class="col-md-8">
                    <div class="card h-100">
                        <div class="card-header bg-custom">
                            Select Payment Method
                        </div>

                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation" id="paypal-payment">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#paypal">
                                        <img src="{{ asset('images/paypal-logo.png') }}" alt="Paypal" width="50px">
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="paypal">
                                    <p>After payment via Paypal's secure checkout, we will send an email to confirm
                                        payment</p>
                                    <p>PayPal accepts <span class="ml-3"><img
                                                src="{{ asset('images/all-payment.jpg') }}" alt="" height="30px"></span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer bg-light">
                            <form action="{{ route('process-transaction') }}" method="POST">
                                @csrf
                                <input type="hidden" name="amount" value="{{ $order->amount }}">
                                <input type="hidden" name="number" value="{{ $order->number }}">
                                <button type="submit" class="btn btn-custom">Checkout with
                                    PayPal</button>
                            </form>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-header bg-custom">
                            Order Summary
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span class="font-weight-bold">Order Number:</span><span
                                        class="ml-2">{{ $order->number }}</span></li>
                                <li class="list-group-item"><span class="font-weight-bold">Level:</span><span
                                        class="ml-2">{{ ucwords($order->level) }}</span></li>
                                <li class="list-group-item"><span class="font-weight-bold">Deadline:</span><span
                                        class="ml-2">{{ $order->deadline }}</span></li>
                                <li class="list-group-item"><span class="font-weight-bold">Paper Type:</span><span
                                        class="ml-2">{{ $order->paper_type }}</span></li>
                                <li class="list-group-item"><span class="font-weight-bold">Spacing:</span><span
                                        class="ml-2">{{ ucfirst($order->spacing) }}</span></li>
                                <li class="list-group-item"><span class="font-weight-bold">No. of Pages:</span><span
                                        class="ml-2">{{ $order->pages }}</span></li>
                                <li class="list-group-item text-danger h5 font-weight-bold">Total Cost: $
                                    {{ $order->amount }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
