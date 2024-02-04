@extends('layout')


@section('title')
    About Us
@endsection


@section('swiper_css')
    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endsection



@section('css_files')
    <link rel="stylesheet" href="{{asset('static/css/about/about.css')}}">
@endsection



@section('content_2')
    <main>
        <div class="about-con section">
            <section class="about-sec">
                <!-- {/* Start content */} -->
                <div class="about-content">
                    <!-- {/* Start img */} -->
                    <div class="img">
                        <div class="sandwitch-img">
                            <img src="{{URL('storage/assets/dish.png')}}" alt="dish" />
                        </div>
                        <div class="info">
                            <h4>Come and visit us</h4>
                            <div>
                                <p>
                                    <img src="{{URL('storage/assets/phone.png')}}" alt="phone" />
                                    (414) 857 - 0107
                                </p>
                                <p>
                                    <img src="{{URL('storage/assets/mail.png')}}" alt="mail" />
                                    happytummy@restaurant.com
                                </p>
                                <p>
                                    <img src="{{URL('storage/assets/location-marker.png')}}" alt="location" />
                                    837 W. Marshall Lane Marshalltown, IA 50158, Los Angeles
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- {/* End img */} -->

                    <!-- {/* Start title */} -->
                    <div class="about-title">
                        <h3>We provide healthy food for your family.</h3>

                        <div class="story">
                            <p>
                                Our story began with a vision to create a unique dining experience that merges fine dining, exceptional service, and a vibrant ambiance. Rooted in city's rich culinary culture, we aim to honor our local roots while infusing a global palate.
                            </p>
                            <p>
                                At place, we believe that dining is not just about food, but also about the overall experience. Our staff, renowned for their warmth and dedication, strives to make every visit an unforgettable event.
                            </p>
                        </div>
                    </div>
                    <!-- {/* End title */} -->
                </div>
                <!-- {/* End content */} -->
            </section>
        </div>

        <section class="video">
            <!-- {/* Start video-con */} -->
            <div class="video-con">
                <video muted loop autoPlay>
                    <source src="https://cdn.create.vista.com/api/media/medium/100970274/stock-video-business-people-having-meeting-at-restaurant?token="  type="video/mp4" />
                </video>

                <p>
                    Feel the authentic & original taste from us
                </p>
            </div>
            <!-- {/* End video-con */} -->

            <!-- {/* Start features */} -->
            <div class="features">
                <!-- {/* Start box */} -->
                <div class="box">
                    <div class="img">
                        <img src="{{URL('storage/assets/restaurant-menu 1.png')}}" alt="restaurant-menu" />
                    </div>

                    <div>
                        <h4>Multi Cuisine</h4>
                        <p>
                            In the new era of technology we look in the future with certainty life.
                        </p>
                    </div>
                </div>

                <div class="box">
                    <div class="img">
                        <img src="{{URL("storage/assets/Icon.png")}}" alt="list-menu" />
                    </div>

                    <div>
                        <h4>Easy To Order</h4>
                        <p>
                            In the new era of technology we look in the future with certainty life.
                        </p>
                    </div>
                </div>

                <div class="box">
                    <div class="img">
                        <img src="{{URL('storage/assets/timer 1.png')}}" alt="timer" />
                    </div>

                    <div>
                        <h4>Fast Delivery</h4>
                        <p>
                            In the new era of technology we look in the future with certainty life.
                        </p>
                    </div>
                </div>
                <!-- {/* End box */} -->
            </div>
            <!-- {/* End features */} -->
        </section>

        <section class="content-info">
            <!-- {/* Start text */} -->
            <div class="text">
                <h3>A little information for our valuable guest</h3>
                <p>
                    At place, we believe that dining is not just about food, but also about the overall experience. Our staff, renowned for their warmth and dedication, strives to make every visit an unforgettable event.
                </p>

                <!-- {/* Start numbers */} -->
                <div class="numbers">
                    <div class="box">
                        3
                        <p>Locations</p>
                    </div>

                    <div class="box">
                        1995
                        <p>Founded</p>
                    </div>

                    <div class="box">
                        65+
                        <p>Staff Members</p>
                    </div>

                    <div class="box">
                        100%
                        <p>Satisfied Customers</p>
                    </div>
                </div>
                <!-- {/* End numbers */} -->
            </div>
            <!-- {/* End text */} -->

            <!-- {/* Start img */} -->
            <div class="img">
                <img src='{{URL('storage/assets/cook.png')}}' alt="cook" />
            </div>
            <!-- {/* End img */} -->
        </section>

        <section class='testominal'>
            <!-- {/* Start content */} -->
            <div class="content">
                <!-- {/* Start sec-head */} -->
                <div class="sec-head">
                    <h2>What Our Customers Say</h2>
                </div>
                <!-- {/* End sec-head */} -->

                <!-- {/* Start slider */} -->
                <div class="slider">
                    <!-- Slider main container -->
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <h3>“The best restaurant”</h3>
                                <p class="comment">
                                    Last night, we dined at place and were simply blown away. From the moment we stepped in, we were enveloped in an inviting atmosphere and greeted with warm smiles.
                                </p>
                                <div class="customer">
                                    <div class="cust-img">
                                        <img src="{{URL('storage/assets/customer1.png')}}" alt="customer"/>
                                    </div>
                                    <div class="cust-name">
                                        <h4>Sophire Robson</h4>
                                        <p>Los Angeles, CA</p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <h3>“Simply delicious”</h3>
                                <p class="comment">
                                    Last night, we dined at place and were simply blown away. From the moment we stepped in, we were enveloped in an inviting atmosphere and greeted with warm smiles.
                                </p>
                                <div class="customer">
                                    <div class="cust-img">
                                        <img src="{{URL('storage/assets/customer2.png')}}" alt="customer"/>
                                    </div>
                                    <div class="cust-name">
                                        <h4>Matt Cannon</h4>
                                        <p>San Diego, CA</p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <h3>“One of a kind restaurant”</h3>
                                <p class="comment">
                                    Last night, we dined at place and were simply blown away. From the moment we stepped in, we were enveloped in an inviting atmosphere and greeted with warm smiles.
                                </p>
                                <div class="customer">
                                    <div class="cust-img">
                                        <img src="{{URL('storage/assets/customer3.png')}}" alt="customer"/>
                                    </div>
                                    <div class="cust-name">
                                        <h4>Andy Smith</h4>
                                        <p>San Francisco, CA</p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <h3>“The best restaurant”</h3>
                                <p class="comment">
                                    Last night, we dined at place and were simply blown away. From the moment we stepped in, we were enveloped in an inviting atmosphere and greeted with warm smiles.
                                </p>
                                <div class="customer">
                                    <div class="cust-img">
                                        <img src="{{URL('storage/assets/customer1.png')}}" alt="customer"/>
                                    </div>
                                    <div class="cust-name">
                                        <h4>Sophire Robson</h4>
                                        <p>Los Angeles, CA</p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <h3>“Simply delicious”</h3>
                                <p class="comment">
                                    Last night, we dined at place and were simply blown away. From the moment we stepped in, we were enveloped in an inviting atmosphere and greeted with warm smiles.
                                </p>
                                <div class="customer">
                                    <div class="cust-img">
                                        <img src="{{URL('storage/assets/customer2.png')}}" alt="customer"/>
                                    </div>
                                    <div class="cust-name">
                                        <h4>Matt Cannon</h4>
                                        <p>San Diego, CA</p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <h3>“One of a kind restaurant”</h3>
                                <p class="comment">
                                    Last night, we dined at place and were simply blown away. From the moment we stepped in, we were enveloped in an inviting atmosphere and greeted with warm smiles.
                                </p>
                                <div class="customer">
                                    <div class="cust-img">
                                        <img src="{{URL('storage/assets/customer3.png')}}" alt="customer"/>
                                    </div>
                                    <div class="cust-name">
                                        <h4>Andy Smith</h4>
                                        <p>San Francisco, CA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <!-- {/* End slider */} -->
            </div>
            <!-- {/* End content */} -->
        </section>
    </main>
@endsection


@section('swiper_js')
    <!-- swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
@endsection


@section('js_files')
    <script src="{{asset('static/js/index.js')}}"></script>
@endsection
