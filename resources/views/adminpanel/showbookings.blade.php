@extends('adminpanel.adminlayout')

@section('title')
    Admin Panel / Show bookings table
@endsection


@section('table')
    <!-- Start Table -->
    <div class="table">
        <h1>Bookings</h1>

        <!-- Start Table -->
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>date</th>
                    <th>time</th>
                    <th>name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>total person</th>
                    <th>user id</th>
                    <th>status</th>
                    <th>actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($bookingsdata as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->date}}</td>
                        <td>{{$item->time}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->total_perosn}}</td>
                        <td>{{$item->user_id}}</td>
                        <td>{{$item->status}}</td>
                        <td>
                            <div class="btns">
                                <a href="{{route('accept.booking' , $item->id)}}" class="accept">accept</a>
                                <a href="{{route('reject.booking' , $item->id)}}" class="reject">reject</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- End Table -->
    </div>
    <!-- End Table -->
@endsection
