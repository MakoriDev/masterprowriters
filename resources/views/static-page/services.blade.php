@extends('layouts.app')

@section('title', 'Services')

@section('single-page-header')
    <section class="single-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Our Services</h2>
                    <ol class="breadcrumb header-bradcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('site-root') }}">Home</a></li>
                        <li class="breadcrumb-item active">Our Services</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')

    <section class="services" id="services">
        <div class="container">
            <div class="row no-gutters">
                <!-- section title -->
                <div class="col-12">
                    <div class="title text-center">
                        <h2>Our Services</h2>
                        <p>We offer the best writing services in the industry</p>
                        <div class="border"></div>
                    </div>
                </div>
                <!-- /section title -->

                <!-- Single Service Item -->
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="service-block p-4 color-bg text-center">
                        <div class="service-icon text-center">
                            <i class="tf-ion-ios-copy-outline"></i>
                        </div>
                        <h3>Dissertation Writing</h3>
                        <p>A dissertation is a long-form piece of academic writing based on original research conducted by you. It is usually submitted as the final step in order to finish a PhD program.

Your dissertation is probably the longest piece of writing you’ve ever completed. It requires solid research, writing, and analysis skills, and it can be intimidating to know where to begin.

Your department likely has guidelines related to how your dissertation should be structured. When in doubt, consult with your supervisor. We are experts in dissertations and we guarantee that your final year doesnt have to be hectic</p>
                    </div>
                </div>
                <!-- End Single Service Item -->

                <!-- Single Service Item -->
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="service-block p-4 text-center">
                        <div class="service-icon text-center">
                            <i class="tf-ion-ios-alarm-outline"></i>
                        </div>
                        <h3>Proposal Writing</h3>
                        <p>Proposal writing is difficult if you are trying to create the solution while you write the proposal. Unfortunately, many people end up in this spot, and instead of just calling the prospect, they try to guess. This is a stressful, low-chance-of-success way to do it.

If you prepare properly ahead of time, actually writing the proposal shouldn't be too difficult, especially with help from experts</p>
                    </div>
                </div>
                <!-- End Single Service Item -->

                <!-- Single Service Item -->
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="service-block p-4 color-bg text-center">
                        <div class="service-icon text-center">
                            <i class="tf-ion-ios-book-outline"></i>
                        </div>
                        <h3>Course Work &amp; Exams</h3>
                        <p>We will help with your courswork assignents on different subjects</p>
                    </div>
                </div>
                <!-- End Single Service Item -->

                <!-- Single Service Item -->
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="service-block p-4  text-center">
                        <div class="service-icon text-center">
                            <i class="tf-ion-ios-briefcase-outline"></i>
                        </div>
                        <h3>Graphic Design</h3>
                        <p>We offer the best graphic design services. Contact us for;</p>
                        Posters, Logos and animations
            
    
                    </div>
                </div>
                <!-- End Single Service Item -->

                <!-- Single Service Item -->
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="service-block p-4 color-bg text-center">
                        <div class="service-icon text-center">
                            <i class="tf-ion-ios-crop"></i>
                        </div>
                        <h3>Apps Development</h3>
                        <p>We have a team of expert website developers. If you need a site for your business, or for your coursework project, we are here.</p>
                    </div>
                </div>
                <!-- End Single Service Item -->

                <!-- Single Service Item -->
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="service-block p-4 text-center">
                        <div class="service-icon text-center">
                            <i class="tf-ion-ios-home-outline"></i>
                        </div>
                        <h3>Other Assignments</h3>
                        <p>Do you have schook work assignments? Contact us for professional help on the following subjects</p>
                        <li>Biology
                            social sciences 
                            Nursing 
                            History 
                            English
                            Sociology
                        </li>
                    </div>
                </div>
                <!-- End Single Service Item -->

            </div> <!-- End row -->
        </div> <!-- End container -->
    </section>

    <section class="team-skills section-sm" id="skills">
        <div class="container">
            <div class="row">

                <!-- section title -->
                <div class="col-12">
                    <div class="title text-center">
                        <h2>Our Skills</h2>
                        <p></p>
                        <div class="border"></div>
                    </div>
                </div>
                <!-- /section title -->

                <div class="col-md-5">
                    <div class="team-skills-content">
                        <h2>Simple To Start</h2>
                        <p></p>
                        <a href="" class="btn btn-main mt-20">Contact Us</a>
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-1">
                    <div class="progress-block">
                        <ul>
                            <li>
                                <span>Photoshop</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 90%;">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <span>Web Application</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 85%;">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <span>Andriod Application</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 92%;">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <span>IOS Development</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 78%;">
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div> <!-- End row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="clients-slider" class="clients-logo-slider">
                        <img src="images/client-logo/logo1.png" alt="">
                        <img src="images/client-logo/logo-2.png" alt="">
                        <img src="images/client-logo/logo-3.png" alt="">
                        <img src="images/client-logo/logo-4.png" alt="">
                        <img src="images/client-logo/logo-5.png" alt="">
                        <img src="images/client-logo/logo1.png" alt="">
                        <img src="images/client-logo/logo-2.png" alt="">
                        <img src="images/client-logo/logo-3.png" alt="">
                        <img src="images/client-logo/logo-4.png" alt="">
                        <img src="images/client-logo/logo-5.png" alt="">
                    </div>

                </div>
            </div>
        </div> <!-- End container -->
    </section>
    <section  class="counter-wrapper section-sm" >
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="title">
                        <h2>Award-Winning Agency</h2>
                        <p></p>
                    </div>
                </div>
                <!-- first count item -->
                <div class="col-md-3 col-sm-6 col-xs-6 text-center " >
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
                <div class="col-md-3 col-sm-6 col-xs-6 text-center " >
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
                <div class="col-md-3 col-sm-6 col-xs-6 text-center "  >
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
            </div> 		<!-- end row -->
        </div>   	<!-- end container -->
    </section>

    <section class="testimonial section" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- testimonial wrapper -->
                    <div class="testimonial-slider">
                        <!-- testimonial single -->
                        <div class="item text-center">
                            <i class="tf-ion-chatbubbles"></i>
                            <!-- client info -->
                            <div class="client-details">
                                <p></p>
                            </div>
                            <!-- /client info -->
                            <!-- client photo -->
                            <div class="client-thumb">
                                <img src="images/client-logo/clients-1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>William Martin</h3>
                                <span></span>
                            </div>
                            <!-- /client photo -->
                        </div>
                        <!-- /testimonial single -->

                        <!-- testimonial single -->
                        <div class="item text-center">
                            <i class="tf-ion-chatbubbles"></i>
                            <!-- client info -->
                            <div class="client-details">
                                <p></p>
                            </div>
                            <!-- /client info -->
                            <!-- client photo -->
                            <div class="client-thumb">
                                <img src="images/client-logo/clients-2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>Emma Harrison</h3>
                                <span></span>
                            </div>
                            <!-- /client photo -->
                        </div>
                        <!-- /testimonial single -->

                        <!-- testimonial single -->
                        <div class="item text-center">
                            <i class="tf-ion-chatbubbles"></i>
                            <!-- client info -->
                            <div class="client-details">
                                <p></p>
                            </div>
                            <!-- /client info -->
                            <!-- client photo -->
                            <div class="client-thumb">
                                <img src="images/client-logo/clients-3.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>Alexander Lucas</h3>
                                <span></span>
                            </div>
                            <!-- /client photo -->
                        </div>
                        <!-- /testimonial single -->
                    </div>
                </div> 		<!-- end col lg 12 -->
            </div>	    <!-- End row -->
        </div>       <!-- End container -->
    </section>
@endsection

