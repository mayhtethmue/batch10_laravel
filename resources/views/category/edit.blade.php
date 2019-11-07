@extends('template')
@section('content')
<h2>Category Edit Form</h2>

<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto my-2">
        <h1 class="my-3 text-center">Category Edit Form</h1>
        <form method="post" action="{{route('category.update',$categories->id)}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label>Category Name:</label>
            <input type="text" name="name" class="form-control" value="{{$categories->name}}"><br>
          </div>

          <div class="form-group">
            <input type="submit" name="btnsubmit" class="btn btn-primary" value="Update"><br>
          </div>

          
        </form>
      </div>
    </div>
  </div>

@endsection