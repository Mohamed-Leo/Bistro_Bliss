@extends('adminpanel.adminlayout')

@section('title')
    Admin Panel / Add Menu
@endsection



@section('form')
    {{-- Start form-con --}}
    <div class="form-con">
        <form action="{{route('addmenu.action')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <h1>add menu form</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="errors-valid">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <input type="text" name="title" placeholder="name of item" value="{{old('title')}}">
            <input type="text" name="price" placeholder="price" value="{{old('price')}}">
            <input type="text" name="description" placeholder="description" value="{{old('description')}}">
            <label for="imgfile">
                <input id="imgfile" type="file" name="imagefile" accept="image/*">
                <i class="fa-solid fa-file"></i>
                add image
            </label>
            <input type="text" name="imagelink" placeholder="image link" value="{{old('imagelink')}}">
            <select name="menutype">
                <option value="breakfast">breakfast</option>
                <option value="drinks">drinks</option>
                <option value="dessert">dessert</option>
                <option value="dishes">main dishes</option>
            </select>
            <input type="submit" value="add to menu">
        </form>
    </div>
    {{-- End form-con --}}
@endsection




