@extends('adminpanel.adminlayout')

@section('title')
    Admin Panel / Show Users table
@endsection


@section('table')
    <!-- Start Table -->
    <div class="table">
        <h1>Users</h1>

        <!-- Start Table -->
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>password</th>
                    <th>role</th>
                    <th>google_id</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($user_data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->password}}</td>
                        <td>{{$item->role}}</td>
                        <td>{{$item->google_id}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- End Table -->
    </div>
    <!-- End Table -->
@endsection
