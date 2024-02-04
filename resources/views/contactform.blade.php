@extends('layout')


@section('title')
    Contact Us
@endsection


@section('css_files')
    <link rel="stylesheet" href="{{asset('static/css/contact/contact.css')}}">
@endsection


@section('content_1')
    <!-- Start title -->
    <div class='con-title'>
        <h1>Contact Us</h1>
        <p>
            We consider all the drivers of change gives you the components you need to change to create a truly happens.
        </p>
    </div>
    <!-- End title -->

    <div class='form-container'>
        <!-- {/* Start form */} -->
        <form action="{{route('contact.action')}}" method="POST">
            @csrf
            <div class="errors">
                {{-- start getting out errors --}}
                @if (!empty($error)) {{$error}} @endif
                {{-- end getting out errors --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <!-- {/* Start date-time */} -->
            <div class="name-email">
                <label for="name">
                    Name
                    <input id='name' type="text" name='name' placeholder='Enter Your Name' value="{{old('name')}}"/>
                </label>
                <label for="email">
                    Email
                    <input id='email' type="email" name='email' placeholder='Enter Email Address' value="{{old('email')}}"/>
                </label>
            </div>
            <!-- {/* End date-time */} -->

            <!-- {/* Start persons */} -->
            <div class="subject">
                <label for="subject">
                    Subject
                    <input id='totalperson' type="text" name='subject' placeholder='Write a subject' value="{{old('subject')}}"/>
                </label>
            </div>
            <!-- {/* End persons */} -->

            <!-- {/* Start persons */} -->
            <div class="message">
                <label for="message">
                    Message
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </label>
            </div>
            <!-- {/* End persons */} -->

            <!-- {/* Start submit */} -->
            <div class="submit">
                <input type="submit" value="submit" />
            </div>
            <!-- {/* End submit */} -->
        </form>
        <!-- {/* End form */} -->
    </div>

    <!-- Start  contact-->
    <div class='contact-info'>
        <!-- {/* Start box */} -->
        <div class="box">
            <h3>Call Us:</h3>
            <p>888-123-650</p>
        </div>

        <div class="box hours">
            <h3>Hours:</h3>
            <p>Mon-Fri: 11am - 8pm Sat, Sun: 9am - 10pm</p>
        </div>

        <div class="box location">
            <h3>Our Location:</h3>
            <p>123 Bridge Street Nowhere Land, LA 12345 United States</p>
        </div>
        <!-- {/* End box */} -->
    </div>
    <!-- End  contact-->
@endsection
