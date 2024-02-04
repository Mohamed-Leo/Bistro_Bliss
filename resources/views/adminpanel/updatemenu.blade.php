@extends('adminpanel.adminlayout')

@section('title')
    Admin Panel / Update Menu
@endsection



@section('form')
    {{-- Start form-con --}}
    <div class="form-con">
        <form action="{{route('updatemenu.action' , $menuitem->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <h1>update menu form</h1>
            <input type="text" name="title" placeholder="name of item" value="{{$menuitem->title}}">
            <input type="text" name="price" placeholder="price" value="{{$menuitem->price}}">
            <input type="text" name="description" placeholder="description" value="{{$menuitem->description}}">
            <label for="imgfile">
                <input id="imgfile" type="file" name="imagefile" accept="image/*">
                <i class="fa-solid fa-file"></i>
                add image
            </label>
            <input type="text" name="imagelink" placeholder="image link" value="{{$menuitem->img_link}}">
            <input type="text" name="menutype" placeholder="menu type" value="{{$menuitem->menu_type}}">
            <input type="submit" value="update menu">
        </form>
    </div>
    {{-- End form-con --}}
@endsection




