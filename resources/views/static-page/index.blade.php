@extends('layouts.app')

@section('title', 'Homepage')

@section('hero-slider')
    <div class="hero-slider">
        <div class="slider-item th-fullpage hero-area"
            style="background-image: url({{ asset('images/slider/slider-bg-1.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Helping you better your grades <br>
                        </h1>
                        <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">Master pro writers is dedicated offering the best writting services in the industry <br>
                             <br> </p>

                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4><i class="fas fa-calculator mr-2"></i>Calculate The Price</h4>
                            </div>
                            <form method="post" role="form" action="{{ route('redirect-order') }}">
                                @csrf
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="paper_type">Paper Type:</label>
                                        <select name="paper_type" id="paper_type" class="form-control">
                                            <option>--Select Paper Type--</option>
                                        </select>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="pages">Pages:</label>
                                                <select name="pages" id="pages" class="form-control">
                                                    <option>--Select Number of Pages--</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="spacing">Spacing:</label>
                                                <select name="spacing" id="spacing" class="form-control">
                                                    <option value="double">Double</option>
                                                    <option value="single">Single</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="level">Select Level:</label>
                                                <select name="level" id="level" class="form-control">
                                                    <option value="high school">High School</option>
                                                    <option value="college">College</option>
                                                    <option value="masters">Masters</option>
                                                    <option value="phd">PhD</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="deadline">Choose Deadline:</label>
                                                <select name="deadline" id="deadline" class="form-control">
                                                    <option value="12 hours">12 hours</option>
                                                    <option value="24 hours">1 day</option>
                                                    <option value="48 hours">2 days</option>
                                                    <option value="72 hours">3 days</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div id="order-summary" class="font-weight-bold h5 text-danger">Total Cost: <span></span></div>
                                    </div>

                                </div>

                                <div class="card-footer">
                                    <div id="cf-submit">
                                        <button type="submit" class="btn btn-main btn-block">Order Now</button>
                                    </div>
                                </div>

                            </form>


                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section class="service-2 section">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <!-- section title -->
                    <div class="title text-center">
                        <h2>What Do We Offer</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet,
                            consectetur
                            adipisicing elit. Voluptates, earum. </p>
                        <div class="border"></div>
                    </div>
                    <!-- /section title -->
                </div>

                <div class="col-md-4 text-center">
                    <img src="{{ asset('images/about/member.jpg') }}" class="inline-block" alt="">
                </div>
                <div class="col-md-8">
                    <div class="row text-center">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="service-item">
                                <i class="tf-ion-ios-alarm-outline"></i>
                                <h4>Time Management</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui
                                    venenatis.</p>
                            </div>
                        </div><!-- END COL -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="service-item">
                                <i class="tf-ion-ios-briefcase-outline"></i>
                                <h4>Marketing Ideas</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui
                                    venenatis.</p>
                            </div>
                        </div><!-- END COL -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="service-item">
                                <i class="tf-ion-ios-email-outline"></i>
                                <h4>Mail Support</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui
                                    venenatis.</p>
                            </div>
                        </div><!-- END COL -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="service-item">
                                <i class="tf-ion-ios-locked-outline"></i>
                                <h4>Secure System</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui
                                    venenatis.</p>
                            </div>
                        </div><!-- END COL -->
                    </div>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->

    <!--
                        Start About Section
                        ==================================== -->
    <section class="about-2 section" id="about">
        <div class="container">
            <div class="row">

                <!-- section title -->
                <div class="col-12">
                    <div class="title text-center">
                        <h2>We Are Master prowriters Agency</h2>
                        <p>At Masterprowriters we offer the best services in writting dissertations</p>
                        <div class="border"></div>
                    </div>
                </div>
                <!-- /section title -->

                <div class="col-md-6">
                    <img src="{{ asset('images/about/about-2.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-6">
                    <ul class="checklist">

                    </ul>
                    <a href="#" class="btn btn-main mt-20">Learn More</a>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->

    <!--
                        Start Call To Action
                        ==================================== -->
    <section class="call-to-action section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Let's Create Something Together</h2>
                    <p></p>
                    <a href="" class="btn btn-main">Contact Us</a>
                </div>
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
                        <p></p>
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

    <!-- Start Testimonial
                        =========================================== -->

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
                                <img src="{{ asset('images/client-logo/clients-1.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>William Martin</h3>
                                <span>CEO , Company Name</span>
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
                                <img src="{{ asset('images/client-logo/clients-2.jpg') }}" class="img-fluid" alt="">
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
                                <img src="{{ asset('images/client-logo/clients-3.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>Alexander Lucas</h3>
                                <span>CEO , Company Name</span>
                            </div>
                            <!-- /client photo -->
                        </div>
                        <!-- /testimonial single -->
                    </div>
                </div> <!-- end col lg 12 -->
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End Section -->

    <!--Start Blog Section-->

    <section class="blog" id="blog">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-12">
                    <div class="title text-center ">
                        <h2> Latest <span class="color">Posts</span></h2>
                        <div class="border"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus facere accusamus,
                            reprehenderit libero
                            inventore nam.</p>
                    </div>
                </div>
                <!-- /section title -->
                <!-- single blog post -->
                <article class="col-md-4 col-sm-6 col-xs-12 clearfix ">
                    <div class="post-item">
                        <div class="media-wrapper">
                            <img src="{{ asset('images/blog/post-1.jpg') }}" alt="amazing caves coverimage"
                                class="img-fluid">
                        </div>

                        <div class="content">
                            <h3><a href="#">Reasons to Smile</a></h3>
                            <p></p>
                            <a class="btn btn-main" href="#"></a>
                        </div>
                    </div>
                </article>
                <!-- /single blog post -->

                <!-- single blog post -->
                <article class="col-md-4 col-sm-6 col-xs-12 ">
                    <div class="post-item">
                        <div class="media-wrapper">
                            <img src="{{ asset('images/blog/post-2.jpg') }}" alt="amazing caves coverimage"
                                class="img-fluid">
                        </div>

                        <div class="content">
                            <h3><a href="#">A Few Moments</a></h3>
                            <p></p>
                            <a class="btn btn-main" href="#">Read more</a>
                        </div>
                    </div>
                </article>
                <!-- end single blog post -->

                <!-- single blog post -->
                <article class="col-md-4 col-sm-6 col-xs-12 ">
                    <div class="post-item">
                        <div class="media-wrapper">
                            <img src="{{ asset('images/blog/post-3.jpg') }}" alt="amazing caves coverimage"
                                class="img-fluid">
                        </div>

                        <div class="content">
                            <h3><a href="#">Hints for Life</a></h3>
                            <p></p>
                            <a class="btn btn-main" href="#">Read more</a>
                        </div>
                    </div>
                </article>
                <!-- end single blog post -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section> <!-- end section -->
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            populatePaperType('{{ route('get-paper-type') }}')
            populatePages()

            const priceUrl = '{{ route('get-price') }}'

            getOrderPrice(priceUrl)

            $('#spacing').on('change', function() {
                const spacing = $(this).val()
                const selectedPage = parseInt($('#pages').val())
                populatePages(spacing, selectedPage)
                getOrderPrice(priceUrl)
            })

            $('#pages').on('change', function() {
                getOrderPrice(priceUrl)
            })

            $('#level').on('change', function() {
                getOrderPrice(priceUrl)
            })

            $('#deadline').on('change', function() {
                getOrderPrice(priceUrl)
            })


        });


        function getOrderPrice(url) {
            const spacing = $("#spacing").val();
            const numberOfPages = $("#pages").val();
            const level = $("#level").val();
            const deadline = $("#deadline").val();

            $.ajax({
                url: url,
                type: "POST",
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
                data: {
                    level,
                    deadline,
                    numberOfPages,
                    spacing,
                },
                async: true,
                dataType: "json",
                success(response) {
                    $("#order-summary span").text(`$ ${response.price.toFixed(2)}`);
                },
            });
        }
    </script>
@endsection
