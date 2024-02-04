@extends('layout')


@section('title')
    My Bookings
@endsection

@section('css_files')
    <link rel="stylesheet" href="{{asset('static/css/my bookings/mybookings.css')}}">
@endsection



@section('content_1')
    <div class="notify-container">
        {{-- check if there are bookings --}}
        @if (count($bookings_data) != 0)
            @foreach ($bookings_data as $book_data)
                {{-- Start box --}}
                <div class="box">
                    <div class="details">

                        <h3>booking</h3>

                        <p>
                            you booked a table , thanks for your booking we will answer you soon ,
                            if there is a problem you can contact with us from contact form ,
                            thanks for being patient.
                        </p>

                        <h4>booking details:-</h4>

                        <ul>
                            <li>date : {{$book_data->date}}</li>
                            <li>time : {{$book_data->time}}</li>
                            <li>name : {{$book_data->name}}</li>
                            <li>email : {{$book_data->email}}</li>
                            <li>phone : {{$book_data->phone}}</li>
                            <li>number of persons : {{$book_data->total_perosn}}</li>
                            {{-- check status --}}
                            @if ($book_data->status == 'accepted')
                                <li class="accepted">status : {{$book_data->status}}</li>
                            @elseif($book_data->status == 'rejected')
                                <li class="rejected">status : {{$book_data->status}}</li>
                            @else
                            <li>status : {{$book_data->status}}</li>
                            @endif
                        </ul>

                        {{-- Start btns --}}
                        <div class="btns">
                            <div class="cancel">
                                <a href="{{route('cancel.booking' , $book_data->id)}}">
                                    <i class="fa-solid fa-xmark"></i>
                                    cancel booking
                                </a>
                            </div>
                        </div>
                        {{-- End btns --}}
                    </div>
                </div>
                {{-- End box --}}
            @endforeach
        @else
        <h1>There are no bookings</h1>
        @endif
    </div>
@endsection
