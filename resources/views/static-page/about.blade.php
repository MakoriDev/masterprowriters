@extends('layouts.app')

@section('title', 'About Us')

@section('single-page-header')
    <section class="single-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>About Us</h2>
                    <ol class="breadcrumb header-bradcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('site-root') }}">Home</a></li>
                        <li class="breadcrumb-item active">About Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')

    <section class="about-shot-info section-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-20">
                    <h2><br> Master ProWriters</h2>
                    <p>At masterprowriters we offer the best writing services in dissertations, course work and othe assignments</p>
                    <p>We have a team of professionals who will handle your orders promptly and with keen detail on instructions. The work is revised by another team of experts that ensures the final work is up to the required standards</p>
                    <p>We offer the best services in;</p>
                    <li> Computer Science Assignments </li>
                    <li> Bussiness Courses</li>
                    <li> Law exams</li>
                    <li> Pyschology classes</li>
                    <li> Trigonemetry </li>
                    <li> Mathematics </li>
                    <li> Information Technology </li>
                    <li> Cyber security </li>
                    <li> History</li>
                    <li> English Literature </li>
                
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="images/company/company-image.jpg" alt="">
                </div>
            </div>
        </div>
    </section>



    <section class="company-mission section-sm bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Our Mission</h3>
                    <p>Help you better your grades</p>
                    <img src="images/company/company-image-2.jpg" alt="" class="img-fluid mt-30">
                </div>
                <div class="col-md-6">
                    <h3>Our Vision</h3>
                    <p>We are dedicated to helping everyone achieve better grades and allow students to engage fully with our team of writers</p>
                    <img src="images/company/company-image-3.jpg" alt="" class="img-fluid mt-30">
                </div>
            </div>
        </div>
    </section>



    <section class="promo-video section-sm">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-12">
                    <div class="title text-center">
                        <h2>Our Promo Video</h2>
                        <p></p>
                        <div class="border"></div>
                    </div>
                </div>
                <!-- /section title -->
                <div class="col-md-8 mx-auto">
                    <iframe src="https://player.vimeo.com/video/51119176" width="100%" height="360" frameborder="0"
                        webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>



    <!--
    Start Call To Action
    ==================================== -->
    <section class="call-to-action-2 section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a tempor eros. Pellentesque elementum
                        nulla sed justo tempor posuere sit amet sit amet ligula.</h2>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->



    <section class="section grallery">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="title text-center">
                        <h2>Sneak Peak Gallery</h2>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="company-gallery">
                        <img src="images/company/gallery-1.jpg" alt="">
                        <img src="images/company/gallery-2.jpg" alt="">
                        <img src="images/company/gallery-3.jpg" alt="">
                        <img src="images/company/gallery-4.jpg" alt="">
                        <img src="images/company/gallery-5.jpg" alt="">
                        <img src="images/company/gallery-5.jpg" alt="">
                        <img src="images/company/gallery-1.jpg" alt="">
                        <img src="images/company/gallery-2.jpg" alt="">
                        <img src="images/company/gallery-3.jpg" alt="">
                        <img src="images/company/gallery-4.jpg" alt="">
                        <img src="images/company/gallery-5.jpg" alt="">
                        <img src="images/company/gallery-5.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Start Our Team
      =========================================== -->
    <section class="team" id="team">
        <div class="container">
            <div class="row">

                <!-- section title -->
                <div class="col-12">
                    <div class="title text-center ">
                        <h2>Our Team</h2>
                        <p></p>
                        <div class="border"></div>
                    </div>
                </div>
                <!-- /section title -->

                <!-- team member -->
                <div class="col-md-4 col-sm-6 ">
                    <div class="team-member text-center">
                        <div class="member-photo">
                            <!-- member photo -->
                            <img class="img-fluid" src="images/team/member-1.jpg" alt="Meghna">
                            <!-- /member photo -->

                            <!-- member social profile -->
                            <div class="mask">
                                <ul class="clearfix">
                                    <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <!-- /member social profile -->
                        </div>

                        <!-- member name & designation -->
                        <div class="member-content">
                            <h3>Michael Jonson</h3>
                            <span>Head Of Marketing</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam,
                                culpa odio.</p>
                        </div>
                        <!-- /member name & designation -->

                    </div>
                </div>
                <!-- end team member -->

                <!-- team member -->
                <div class="col-md-4 col-sm-6 ">
                    <div class="team-member text-center">
                        <div class="member-photo">
                            <!-- member photo -->
                            <img class="img-fluid" src="images/team/member-2.jpg" alt="Meghna">
                            <!-- /member photo -->

                            <!-- member social profile -->
                            <div class="mask">
                                <ul class="clearfix">
                                    <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <!-- /member social profile -->
                        </div>

                        <!-- member name & designation -->
                        <div class="member-content">
                            <h3>Carrick Mollenkamp</h3>
                            <span>Web Developer</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam,
                                culpa odio.</p>
                        </div>
                        <!-- /member name & designation -->
                    </div>
                </div>
                <!-- end team member -->

                <!-- team member -->
                <div class="col-md-4 col-sm-6 ">
                    <div class="team-member text-center">
                        <div class="member-photo">
                            <!-- member photo -->
                            <img class="img-fluid" src="images/team/member-3.jpg" alt="Meghna">
                            <!-- /member photo -->

                            <!-- member social profile -->
                            <div class="mask">
                                <ul class="clearfix">
                                    <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <!-- /member social profile -->
                        </div>

                        <!-- member name & designation -->
                        <div class="member-content">
                            <h3>David Gauthier</h3>
                            <span>Head Of Management</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam,
                                culpa odio.</p>
                        </div>
                        <!-- /member name & designation -->

                    </div>
                </div>
                <!-- end team member -->
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->



    <!--
      Start Counter Section
      ==================================== -->

    <section class="counter-wrapper section-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="title">
                        <h2>Award-Winning Agency</h2>
                        <p>Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu. Sed condimentum
                            iaculis ex, in faucibus lorem accumsan non. Donec mattis tincidunt metus. Morbi sed tortor a
                            risus luctus dignissim.</p>
                    </div>
                </div>
                <!-- first count item -->
                <div class="col-md-3 col-sm-6 col-xs-6 text-center ">
                    <div class="counters-item">
                        <i class="tf-ion-ios-alarm-outline"></i>
                        <div>
                            <span class="counter" data-count="150">0</span>
                        </div>
                        <h3>Happy Clients</h3>
                    </div>
                </div>
                <!-- end first count item -->

                <!-- second count item -->
                <div class="col-md-3 col-sm-6 col-xs-6 text-center ">
                    <div class="counters-item">
                        <i class="tf-ion-ios-analytics-outline"></i>
                        <div>
                            <span class="counter" data-count="130">0</span>
                        </div>
                        <h3>Projects completed</h3>
                    </div>
                </div>
                <!-- end second count item -->

                <!-- third count item -->
                <div class="col-md-3 col-sm-6 col-xs-6 text-center ">
                    <div class="counters-item">
                        <i class="tf-ion-ios-compose-outline"></i>
                        <div>
                            <span class="counter" data-count="99">0</span>
                        </div>
                        <h3>Positive feedback</h3>

                    </div>
                </div>
                <!-- end third count item -->

                <!-- fourth count item -->
                <div class="col-md-3 col-sm-6 col-xs-6 text-center ">
                    <div class="counters-item kill-border">
                        <i class="tf-ion-ios-bolt-outline"></i>
                        <div>
                            <span class="counter" data-count="250">0</span>
                        </div>
                        <h3>Cups of Coffee</h3>
                    </div>
                </div>
                <!-- end fourth count item -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section> <!-- end section -->



    <!--
    Start Call To Action
    ==================================== -->
    <section class="call-to-action section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Let's Create Something Together</h2>
                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin bibendum auctor, <br> nisi elit
                        consequat ipsum, nesagittis sem nid elit. Duis sed odio sitain elit.</p>
                    <a href="" class="btn btn-main">Contact Us</a>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->
@endsection
