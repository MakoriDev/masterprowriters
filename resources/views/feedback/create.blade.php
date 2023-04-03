@extends('layouts.app')

@section('title', 'Contact Us')

@section('single-page-header')
    <section class="single-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Contact Us</h2>
                    <ol class="breadcrumb header-bradcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('site-root') }}">Home</a></li>
                        <li class="breadcrumb-item active">Contact Us</li>
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
            <div class="row">

                <div class="col-12">
                    <div class="title text-center">
                        <h2>Get In Touch</h2>
                        <p></p>
                        <div class="border"></div>
                    </div>
                </div>



                <div class="contact-details col-md-6 ">
                    <h3>Contact Details</h3>
                    <p></p>
                    <ul class="contact-short-info">
                        <li>
                            <i class="tf-ion-ios-home"></i>
                            <span>United States, New York City </span>
                        </li>
                        <li>
                            <i class="tf-ion-android-phone-portrait"></i>
                            <span>Phone: +1 806 547 1021 </span>
                        </li>
                        <li>
                            <i class="tf-ion-android-globe"></i>
                            <span>Fax: +254 796733007</span>
                        </li>
                        <li>
                            <i class="tf-ion-android-mail"></i>
                            <span>Email: masterprowriters@gmail.com</span>
                        </li>
                    </ul>

                    <div class="social-icon">
                        <ul>
                            <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="tf-ion-social-dribbble-outline"></i></a></li>
                            <li><a href="#"><i class="tf-ion-social-linkedin-outline"></i></a></li>
                        </ul>
                    </div>

                </div>



                <div class="contact-form col-md-6 ">
                    <form method="post" action="{{ route('feedback.store') }}" role="form">
                        @csrf
                        <div class="form-group">
                            <input type="text" placeholder="Your Name"
                                class="form-control @error('name') is-invalid @enderror" name="name" id="name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="email" placeholder="Your Email"
                                class="form-control @error('email') is-invalid @enderror" name="email" id="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text" placeholder="Subject"
                                class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject">
                            @error('subject')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <textarea rows="6" placeholder="Message"
                                class="form-control @error('message') is-invalid @enderror" name="message"
                                id="message"></textarea>
                            @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div id="cf-submit">
                            <input type="submit" class="btn btn-custom" value="Submit">
                        </div>

                    </form>
                </div>


            </div>
        </div>
    </section>
@endsection
