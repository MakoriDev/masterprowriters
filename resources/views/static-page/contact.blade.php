<script id="BotPenguin-messenger-widget" src="https://cdn.botpenguin.com/botpenguin.js" defer>642f3caa17488405b7a62a07,642f3c1b5a0f1537e4c4441e</script>








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
            <div class="row">

                <!-- section title -->
                <div class="col-12">
                    <div class="title text-center" >
                        <h2>Get In Touch</h2>
                        <p></p>
                        <div class="border"></div>
                    </div>
                </div>
                <!-- /section title -->

                <!-- Contact Details -->
                <div class="contact-details col-md-6 " >
                    <h3>Contact Details</h3>
                    <p>Phone: +1 (806) 547-1021 </p>
                    <ul class="contact-short-info" >
                        <li>
                            <i class="tf-ion-ios-home"></i>
                            <span>Jane Peters </span>
                        </li>
                        <li>
                            <i class="tf-ion-android-phone-portrait"></i>
                            <span>Phone: +1 (806) 547-1021 </span>
                        </li>
                        <li>
                            <i class="tf-ion-android-globe"></i>
                            <span>Fax: +1 (806) 547-1021 </span>
                        </li>
                        <li>
                            <i class="tf-ion-android-mail"></i>
                            <span>Email: Masterprowriters@gmail.com</span>
                        </li>
                    </ul>
                    <!-- Footer Social Links -->
                    <div class="social-icon">
                        <ul>
                            <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                            <li><a href="https://twitter.com/JanePeterstutor?t=OuAyhLWJoiWUtL0LXLjmuQ&s=09"><i class="tf-ion-social-twitter"></i></a></li>
                            <li><a href="https://instagram.com/janepeters_tutor?igshid=ZDdkNTZiNTM="><i class="tf-ion-social-dribbble-outline"></i></a></li>
                            <li><a href="#"><i class="tf-ion-social-linkedin-outline"></i></a></li>
                        </ul>
                    </div>
                    <!--/. End Footer Social Links -->
                </div>
                <!-- / End Contact Details -->

                <!-- Contact Form -->
                <div class="contact-form col-md-6 " >
                    <form method="post" role="form">
                        <div class="form-group">
                            <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
                        </div>

                        <div class="form-group">
                            <input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
                        </div>

                        <div class="form-group">
                            <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
                        </div>

                        <div class="form-group">
                            <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>
                        </div>

                        <div id="cf-submit">
                            <input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
                        </div>

                    </form>
                </div>
                <!-- ./End Contact Form -->

            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
@endsection


