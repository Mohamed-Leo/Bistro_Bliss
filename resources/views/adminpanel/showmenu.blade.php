@extends('adminpanel.adminlayout')

@section('title')
    Admin Panel / Show Menu
@endsection


@section('table')
    <!-- Start Table -->
    <div class="table">
        <h1>Menu</h1>

        <!-- Start Table -->
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>menu type</th>
                    <th>title</th>
                    <th>price</th>
                    <th>description</th>
                    <th>img_file</th>
                    <th>img_link</th>
                    <th>btns</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($menudata as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->menu_type}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->img_file}}</td>
                        <td>{{$item->img_link}}</td>
                        <td>
                            <a href="{{route('updatemenu.form' , $item->id)}}" class="update">update</a>
                            <a href="{{route('destroy.item' , $item->id)}}" class="delete">delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- End Table -->
    </div>
    <!-- End Table -->

    <div class="deletebtns">
        <a class="show-deleted" href="{{route('show.deleted')}}">show deleted</a>
        <a class="delete-all" href="{{route('delete.all')}}">Delete All</a>
    </div>
@endsection
