@extends('template')
@section('content')

<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto my-2">
        <h1 class="my-3 text-center">Post Create Form</h1>
        <form method="post" action="{{route('category.store')}}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group">
            <input type="submit" name="btbsubmit" class="btn btn-primary" value="Save">
          </div>

          
        </form>
      </div>
    </div>
  </div>

@endsection