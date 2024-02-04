@extends('adminpanel.adminlayout')

@section('title')
    Admin Panel / Show Deleted
@endsection


@section('table')
    <!-- Start Table -->
    <div class="table">
        <h1>Deleted Items</h1>

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
                    <th>deleted_at</th>
                    <th>btns</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($menuditems as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->menu_type}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->img_file}}</td>
                        <td>{{$item->img_link}}</td>
                        <td>{{$item->deleted_at}}</td>
                        <td>
                            <a href="{{route('restore.item' , $item->id)}}" class="update">restore</a>
                            <a href="{{route('force.delete' , $item->id)}}" class="delete">delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- End Table -->
    </div>
    <!-- End Table -->
@endsection
