@extends('layout')

@section('title')
    Bistro Bliss
@endsection


@section('swiper_css')
    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endsection


@section('css_files')
    <link rel="stylesheet" href="{{asset('static/css/home/home.css')}}">
@endsection

@section('content_1')
    <!-- Start hero -->
    <section class="hero section">
        <!-- {/*  Start content */} -->
        <div class="content">
            <h1>Best food for your taste</h1>
            <div class="text">
                <p>Discover delectable cuisine and unforgettable moments in our welcoming, culinary haven.</p>
            </div>
            <!-- {/* Start btns */} -->
            <div class="btns">
                <a class="book" href="{{route('book.form')}}">book a table</a>
                <a href="{{route('menu.page')}}">explore menu</a>
            </div>
            <!-- {/* End btns */} -->
        </div>
    </section>
    <!-- End hero -->
@endsection



@section('content_2')
    <main>
        <section class="menu-sec section">
            <!-- {/* start content */} -->
            <div class="menu-content">
                <!-- {/* Start sec-head */} -->
                <div class="sec-head">
                    <h2>Browse Our Menu</h2>
                </div>
                <!-- {/* End sec-head */} -->

                <!-- {/* Start cards */} -->
                <div class="menu-cards">

                    <div class="card" style="--d:0;">
                        <!-- {/* Start img */} -->
                        <div class="img">
                            <img class="ellipse" src="{{URL('storage/assets/Ellipse 42.png')}}" alt="back-icon" />
                            <img class="tea" src="{{URL('storage/assets/tea.png')}}" alt="tea-icon" />
                        </div>
                        <!-- {/*  End img */} -->

                        <!-- {/* Start text */} -->
                        <div class="text">
                            <h4>Breakfast</h4>
                            <p>
                                In the new era of technology we look in the future with certainty and pride for our life.
                            </p>
                            <a href="{{route('menu.break.page')}}">Explore Menu</a>
                        </div>
                        <!-- {/* End text */} -->
                    </div>

                    <div class="card" style="--d:1;">
                        <!-- {/* Start img */} -->
                        <div class="img">
                            <img class="icon" src="{{URL('storage/assets/corns.png')}}" alt="corns-icon" />
                        </div>
                        <!-- {/* End img */} -->

                        <!-- {/* Start text */} -->
                        <div class="text">
                            <h4>Main Dishes</h4>
                            <p>
                                In the new era of technology we look in the future with certainty and pride for our life.
                            </p>
                            <a href="{{route('menu.dishes.page')}}">Explore Menu</a>
                        </div>
                        <!-- {/* End text */} -->
                    </div>

                    <div class="card" style="--d:2;">
                        <!-- {/* Start img */} -->
                        <div class="img">
                            <img class="icon" src="{{URL('storage/assets/cup.png')}}" alt="cup-icon" />
                        </div>
                        <!-- {/* End img */} -->

                        <!-- {/* Start text */} -->
                        <div class="text">
                            <h4>Drinks</h4>
                            <p>
                                In the new era of technology we look in the future with certainty and pride for our life.
                            </p>
                            <a href="{{route('menu.drinks.page')}}">Explore Menu</a>
                        </div>
                        <!-- {/* End text */} -->
                    </div>

                    <div class="card" style="--d:3;">
                        <!-- {/* Start img */} -->
                        <div class="img">
                            <img class="icon" src='{{URL('storage/assets/cake.png')}}' alt="cake-icon" />
                        </div>
                        <!-- {/* End img */} -->

                        <!-- {/* Start text */} -->
                        <div class="text">
                            <h4>Desserts</h4>
                            <p>
                                In the new era of technology we look in the future with certainty and pride for our life.
                            </p>
                            <a href="{{route('menu.dessert.page')}}">Explore Menu</a>
                        </div>
                        <!-- {/* End text */} -->
                    </div>
                </div>
                <!-- {/* End cards */} -->
            </div>
            <!-- {/* End content */} -->
        </section>

        <section class="about-sec section">
            <!-- {/* Start content */} -->
            <div class="about-content">
                <!-- {/* Start img */} -->
                <div class="img">
                    <div class="sandwitch-img">
                        <img src="{{URL('storage/assets/sandwitch.png')}}" alt="food" />
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

                    <div class="more">
                        <a href="/about">more about us</a>
                    </div>
                </div>
                <!-- {/* End title */} -->
            </div>
            <!-- {/* End content */} -->
        </section>

        <section class="services section">
            <!-- {/* Start content */} -->
            <div class="content">
                <h2>We also offer unique services for your events</h2>

                <!-- {/* Start cards */} -->
                <div class="cards">

                    <div class="card" style="--d:0;">
                        <!-- {/* Start img */} -->
                        <div class="img">
                            <img src='{{URL('storage/assets/kebab.png')}}' alt="kebab" />
                        </div>
                        <!-- {/* End img */} -->

                        <!-- {/* Start text */} -->
                        <div class="text">
                            <h4>Caterings</h4>
                            <p>
                                In the new era of technology we look in the future with certainty for life.
                            </p>
                        </div>
                        <!-- {/* End text */} -->
                    </div>

                    <div class="card" style="--d:1;">
                        <!-- {/* Start img */} -->
                        <div class="img">
                            <img src="{{URL('storage/assets/birthday.png')}}" alt="birthday" />
                        </div>
                        <!-- {/* End img  */} -->

                        <!-- {/* Start text */} -->
                        <div class="text">
                            <h4>Birthdays</h4>
                            <p>
                                In the new era of technology we look in the future with certainty for life.
                            </p>
                        </div>
                        <!-- {/* End text */} -->
                    </div>

                    <div class="card" style="--d:2;">
                        <!-- {/* Start img */} -->
                        <div class="img">
                            <img src="{{URL('storage/assets/happy-man.png')}}" alt="happy-man" />
                        </div>
                        <!-- {/* End img */} -->

                        <!-- {/* Start text */} -->
                        <div class="text">
                            <h4>Weddings</h4>
                            <p>
                                In the new era of technology we look in the future with certainty for life.
                            </p>
                        </div>
                        <!-- {/* End text */} -->
                    </div>

                    <div class="card" style="--d:3;">
                        <!-- {/* Start img */} -->
                        <div class="img">
                            <img src="{{URL('storage/assets/friends.png')}}" alt="friends" />
                        </div>
                        <!-- {/* End img */} -->

                        <!-- {/* Start text */} -->
                        <div class="text">
                            <h4>Events</h4>
                            <p>
                                In the new era of technology we look in the future with certainty for life.
                            </p>
                        </div>
                        <!-- {/* End text */} -->
                    </div>
                </div>
                <!-- {/* End cards */} -->
            </div>
            <!-- {/* End content */} -->
        </section>

        <section class="delivery section">
            <!-- {/* Start content */} -->
            <div class="content">
                <!-- {/* Start img */} -->
                <div class="img">
                    <!-- {/* Start chef-img */} -->
                    <div class="cooking-img">
                        <div class="chef">
                            <img src="{{URL('storage/assets/chef.png')}}" alt="chef" />
                        </div>

                        <div class="align">
                            <div>
                                <img src="{{URL('storage/assets/curry.png')}}" alt="curry" />
                            </div>
                            <div>
                                <img src="{{URL("storage/assets/pot.png")}}" alt="pot" />
                            </div>
                        </div>
                    </div>
                    <!-- {/* Start chef-img */} -->
                </div>
                <!-- {/* End img */} -->

                <!-- {/* Start info */} -->
                <div class="info">
                    <h4>Fastest Food Delivery in City</h4>

                    <div class="text">

                        <p>
                            Our visual designer lets you quickly and of drag a down your way to customapps for both keep desktop.
                        </p>

                        <div class="icons-text">

                            <div class="icons">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M7.53504 5.02349V7.53516L9.41879 9.41891M13.1863 7.53516C13.1863 10.6563 10.6561 13.1864 7.53504 13.1864C4.41394 13.1864 1.88379 10.6563 1.88379 7.53516C1.88379 4.41406 4.41394 1.88391 7.53504 1.88391C10.6561 1.88391 13.1863 4.41406 13.1863 7.53516Z" stroke="white" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"/>
                                    </svg>
                                </div>
                                Delivery within 30 minutes
                            </div>

                            <div class="icons">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M5.65131 8.79099L9.41881 5.02349M5.96529 5.33745H5.97157M9.10487 8.47704H9.11115M11.9305 13.1864V3.13974C11.9305 2.44617 11.3682 1.88391 10.6746 1.88391H4.39548C3.7019 1.88391 3.13965 2.44617 3.13965 3.13974V13.1864L5.33736 11.9306L7.53506 13.1864L9.73277 11.9306L11.9305 13.1864ZM6.27923 5.33745C6.27923 5.51085 6.13867 5.65141 5.96527 5.65141C5.79188 5.65141 5.65131 5.51085 5.65131 5.33745C5.65131 5.16406 5.79188 5.02349 5.96527 5.02349C6.13867 5.02349 6.27923 5.16406 6.27923 5.33745ZM9.41881 8.47704C9.41881 8.65043 9.27825 8.79099 9.10486 8.79099C8.93146 8.79099 8.7909 8.65043 8.7909 8.47704C8.7909 8.30364 8.93146 8.16308 9.10486 8.16308C9.27825 8.16308 9.41881 8.30364 9.41881 8.47704Z" stroke="white" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"/>
                                    </svg>
                                </div>
                                Best Offer & Prices
                            </div>

                            <div class="icons">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M1.88379 1.88385H3.13962L3.39079 3.13968M4.39546 8.16302H10.6746L13.1863 3.13968H3.39079M4.39546 8.16302L3.39079 3.13968M4.39546 8.16302L2.95571 9.60276C2.56014 9.99833 2.8403 10.6747 3.39971 10.6747H10.6746M10.6746 10.6747C9.98104 10.6747 9.41879 11.2369 9.41879 11.9305C9.41879 12.6241 9.98104 13.1863 10.6746 13.1863C11.3682 13.1863 11.9305 12.6241 11.9305 11.9305C11.9305 11.2369 11.3682 10.6747 10.6746 10.6747ZM5.65129 11.9305C5.65129 12.6241 5.08903 13.1863 4.39546 13.1863C3.70188 13.1863 3.13962 12.6241 3.13962 11.9305C3.13962 11.2369 3.70188 10.6747 4.39546 10.6747C5.08903 10.6747 5.65129 11.2369 5.65129 11.9305Z" stroke="white" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"/>
                                    </svg>
                                </div>
                                Online Services Available
                            </div>
                        </div>
                    </div>
                </div>
                <!-- {/* End info */} -->
            </div>
            <!-- {/* End content */} -->
        </section>

        <section class='testominal section'>
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

        <section class="blog section">
            <!-- {/* Start content */} -->
            <div class="content">
                <!-- {/* Start head-blog */} -->
                <div class="head-blog">
                    <h2>Our Blog & Articles</h2>
                    <a href="{{route('blogs.page')}}">read all articles</a>
                </div>
                <!-- {/* End head-blog */} -->

                <!-- {/* Start cards */} -->
                <div class="cards">
                    <div class="card-1">

                        <div class="burger-img">
                            <img src="{{URL('storage/assets/burger.png')}}" alt="burger" />
                        </div>

                        <div class="text">
                            <h5>January 3, 2023</h5>
                            <p class="par-1">
                                The secret tips & tricks to prepare a perfect burger & pizza for our customers
                            </p>
                            <p class="par-2">
                                Lorem ipsum dolor sit amet consectetur of a adipiscing elitilmim semper adipiscing massa gravida nisi cras enim quis nibholm varius amet gravida ut facilisis neque egestas.
                            </p>
                        </div>
                    </div>

                    <div class="card-2">
                        <div class="box" style="--d:1;">

                            <div class="img">
                                <img src="{{URL('storage/assets/fries.png')}}" alt="fries" />
                            </div>

                            <div class="text">
                                <h5>January 3, 2023</h5>
                                <p class="par-1">
                                    How to prepare the perfect french fries in an air fryer
                                </p>
                            </div>
                        </div>

                        <div class="box" style="--d:2;">

                            <div class="img">
                                <img src="{{URL('storage/assets/chekiesn.png')}}" alt="chekiesn" />
                            </div>

                            <div class="text">
                                <h5>January 3, 2023</h5>
                                <p class="par-1">
                                    How to prepare delicious chicken tenders
                                </p>
                            </div>
                        </div>

                        <div class="box" style="--d:3;">

                            <div class="img">
                                <img src="{{URL('storage/assets/cakes.png')}}" alt="cakes" />
                            </div>

                            <div class="text">
                                <h5>January 3, 2023</h5>
                                <p class="par-1">
                                    7 delicious cheesecake recipes you can prepare
                                </p>
                            </div>
                        </div>

                        <div class="box" style="--d:4;">

                            <div class="img">
                                <img src="{{URL('storage/assets/pizza.png')}}" alt="pizza" />
                            </div>

                            <div class="text">
                                <h5>January 3, 2023</h5>
                                <p class="par-1">
                                    5 great pizza restaurants you should visit this city
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- {/* End cards */} -->
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


