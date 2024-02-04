@extends('layout')


@section('title')
    Book A Table
@endsection


@section('css_files')
    <link rel="stylesheet" href="{{asset('static/css/booktable/booktable.css')}}">
@endsection


@section('content_1')
    <!-- Start title -->
    <div class='title'>
        <h1>Book A Table</h1>
        <p>
            We consider all the drivers of change gives you the components you need to change to create a truly happens.
        </p>
    </div>
    <!-- End title -->

    <!-- Start form -->
        <div class='form-con'>
            <!-- {/* Start form */} -->
            <form action="{{route('book.action')}}" method="POST">
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
                <div class="date-time">
                    <label for="date">
                        Date
                        <input id='date' type="date" name='date' value="{{old('date')}}"/>
                    </label>
                    <label for="time">
                        Time
                        <input id='time' type="time" name='time' value="{{old('time')}}"/>
                    </label>
                </div>
                <!-- {/* End date-time */} -->

                <!-- {/* Start name-phone */} -->
                <div class="name-email">
                    <label for="name">
                        Name
                        <input id='name' type="text" placeholder='Enter Your Name' name='name' value="{{old('name')}}"/>
                    </label>
                    <label for="email">
                        Email
                        <input id='email' type="email" name='email' placeholder="Enter Your Email" value="{{old('email')}}"/>
                    </label>
                </div>
                <!-- {/* End name-phone */} -->

                {{-- Start phone --}}
                <div class="phone">
                    <label for="phone">
                        Phone
                        <input id='phone' type="tel" name='phone' placeholder="123-45-678" value="{{old('phone')}}"/>
                    </label>
                </div>
                {{-- End phone --}}

                <!-- {/* Start persons */} -->
                <div class="persons">
                    <label for="person">
                        Total Person
                        <select name="person" id="person">
                            <option value="1 person">1 person</option>
                            <option value="2 person">2 person</option>
                            <option value="3 person">3 person</option>
                            <option value="4 person">4 person</option>
                            <option value="more than 4">more than 4</option>
                        </select>
                    </label>
                </div>
                <!-- {/* End persons */} -->

                <!-- {/* Start submit */} -->
                <div class="submit">
                    <input type="submit" value="Book A Table" />
                </div>
                <!-- {/* End submit */} -->
            </form>
            <!-- {/* End form */} -->

            <!-- {/* Start img */} -->
            <div class="img">
                <img src="{{URL('storage/assets/form-image.png')}}" alt="map" />
            </div>
            <!-- {/* End img */} -->
        </div>
    <!-- End form -->
@endsection
