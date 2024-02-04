@extends('layout')


@section('title')
    Notifications
@endsection

@section('css_files')
    <link rel="stylesheet" href="{{asset('static/css/notifications/notifications.css')}}">
@endsection



@section('content_1')
    <div class="notify-container">
        {{-- check if there is a notifications --}}
        @if (count(auth()->user()->notifications) != 0)
            @foreach (auth()->user()->notifications as $notify)
                @if ($notify->type == 'App\\Notifications\\BookingsNotify')
                    {{-- Start box --}}
                    <div class="box">
                        {{-- Start notify-time --}}
                        <div class="notify-time">
                            <p>{{$notify->created_at->format('H:i d, M Y')}}</p>
                        </div>
                        {{-- End notify-time --}}

                        {{-- Start details --}}
                        <div class="details">

                            <h3>booking</h3>

                            <p>
                                you booked a table , thanks for your booking we will answer you soon ,
                                if there is a problem you can contact with us from contact form ,
                                thanks for being patient.
                            </p>

                            <h4>booking details:-</h4>

                            <ul>
                                <li>date : {{$notify->data['date']}}</li>
                                <li>time : {{$notify->data['time']}}</li>
                                <li>name : {{$notify->data['name']}}</li>
                                <li>email : {{$notify->data['email']}}</li>
                                <li>phone : {{$notify->data['phone']}}</li>
                                <li>number of persons : {{$notify->data['person']}}</li>
                                {{-- check status --}}
                                @if ($notify->data['status'] == 'accepted')
                                    <li class="accepted">status : {{$notify->data['status']}}</li>
                                @elseif($notify->data['status'] == 'rejected')
                                    <li class="rejected">status : {{$notify->data['status']}}</li>
                                @else
                                <li>status : {{$notify->data['status']}}</li>
                                @endif
                            </ul>

                            {{-- Start btns --}}
                            <div class="btns">

                                <div class="delete">
                                    <a href="{{route('delete.notification' , $notify->id)}}">
                                        <i class="fa-solid fa-trash"></i>
                                        delete notification
                                    </a>
                                </div>

                                <div class="read">
                                    {{-- check notification is reade or not --}}
                                    @if ($notify->read_at)
                                        <a class="marked" href="{{route('read.notification' , $notify->id)}}">
                                            <i class="fa-solid fa-envelope-circle-check"></i>
                                            readed
                                        </a>
                                    @else
                                        <a class="mark" href="{{route('read.notification' , $notify->id)}}">
                                            <i class="fa-solid fa-envelope-circle-check"></i>
                                            mark as read
                                        </a>
                                    @endif
                                </div>
                            </div>
                            {{-- End btns --}}
                        </div>
                    </div>
                    {{-- End box --}}
                @elseif($notify->type == 'App\\Notifications\\ContactsNotify')
                    {{-- Start box --}}
                    <div class="box">
                        {{-- Start notify-time --}}
                        <div class="notify-time">
                            <p>{{$notify->created_at->format('H:i d, M Y')}}</p>
                        </div>
                        {{-- End notify-time --}}

                        {{-- Start details --}}
                        <div class="details">

                            <h3>Contact</h3>

                            <p>
                                you contacted with us , thanks for contacting we will answer you soon ,
                                if there is a problem you can contact with us from contact form ,
                                thanks for being patient.
                            </p>

                            <h4>Contact details:-</h4>

                            <ul>
                                <li>name : {{$notify->data['name']}}</li>
                                <li>email : {{$notify->data['email']}}</li>
                                <li>subject : {{$notify->data['subject']}}</li>
                                <li>message : {{$notify->data['message']}}</li>
                                <li>status : {{$notify->data['status']}}</li>
                            </ul>

                            {{-- Start btns --}}
                            <div class="btns">

                                <div class="delete">
                                    <a href="{{route('delete.notification' , $notify->id)}}">
                                        <i class="fa-solid fa-trash"></i>
                                        delete notification
                                    </a>
                                </div>

                                <div class="read">
                                    {{-- check notification is reade or not --}}
                                    @if ($notify->read_at)
                                        <a class="marked" href="{{route('read.notification' , $notify->id)}}">
                                            <i class="fa-solid fa-envelope-circle-check"></i>
                                            readed
                                        </a>
                                    @else
                                        <a class="mark" href="{{route('read.notification' , $notify->id)}}">
                                            <i class="fa-solid fa-envelope-circle-check"></i>
                                            mark as read
                                        </a>
                                    @endif
                                </div>
                            </div>
                            {{-- End btns --}}
                        </div>
                    </div>
                    {{-- End box --}}
                @elseif($notify->type == 'App\\Notifications\\CancelBookingNotify')
                {{-- Start box --}}
                <div class="box">
                    {{-- Start notify-time --}}
                    <div class="notify-time">
                        <p>{{$notify->created_at->format('H:i d, M Y')}}</p>
                    </div>
                    {{-- End notify-time --}}

                    {{-- Start details --}}
                    <div class="details">

                        <h3>Canceld Booking</h3>

                        <p>
                            you canceld a book , we hope there is no any issue if you have an
                            issue you can send us with contact us form, thanks for being paient.
                        </p>

                        <h4>Booking details:-</h4>

                        <ul>
                            <li>name : {{$notify->data['name']}}</li>
                            <li>email : {{$notify->data['email']}}</li>
                            <li>date : {{$notify->data['date']}}</li>
                            <li>time : {{$notify->data['time']}}</li>
                        </ul>

                        {{-- Start btns --}}
                        <div class="btns">

                            <div class="delete">
                                <a href="{{route('delete.notification' , $notify->id)}}">
                                    <i class="fa-solid fa-trash"></i>
                                    delete notification
                                </a>
                            </div>

                            <div class="read">
                                {{-- check notification is reade or not --}}
                                @if ($notify->read_at)
                                    <a class="marked" href="{{route('read.notification' , $notify->id)}}">
                                        <i class="fa-solid fa-envelope-circle-check"></i>
                                        readed
                                    </a>
                                @else
                                    <a class="mark" href="{{route('read.notification' , $notify->id)}}">
                                        <i class="fa-solid fa-envelope-circle-check"></i>
                                        mark as read
                                    </a>
                                @endif
                            </div>
                        </div>
                        {{-- End btns --}}
                    </div>
                </div>
                {{-- End box --}}
                @endif
            @endforeach
        @else
        <h1>There are no notifications</h1>
        @endif
    </div>
@endsection
