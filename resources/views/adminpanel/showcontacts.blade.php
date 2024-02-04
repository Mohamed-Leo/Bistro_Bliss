@extends('adminpanel.adminlayout')

@section('title')
    Admin Panel / Show Contacts table
@endsection


@section('table')
    <!-- Start Table -->
    <div class="table">
        <h1>Contacts</h1>

        <!-- Start Table -->
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>subject</th>
                    <th>message</th>
                    <th>user_id</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($contact_data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->subject}}</td>
                        <td>{{$item->message}}</td>
                        <td>{{$item->user_id}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- End Table -->
    </div>
    <!-- End Table -->
@endsection
