@extends('template')
@section('content')

<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto my-2">
        <h1 class="my-3 text-center">Post Edit Form</h1>
        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif
        <form method="post" action="{{route('post.update',$post->id)}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label>Title:</label>
            <input type="text" name="title" class="form-control" value="{{$post->title}}">
          </div>

          <div class="form-group">
            <label>Content:</label>
            <textarea name="content" class="form-control" >{{$post->body}}</textarea>
          </div>

          <div class="form-group">
            <label>Photo:</label><span class="text-danger">[supported file types:jpg,png]</span>
            <input type="file" name="photo" class="form-control">
            <img src="{{asset($post->image)}}" class="img-fluid">

            <input type="hidden" name="oldphoto" value="{{$post->image}}">

          </div>

          <div class="form-group">
            <label>Categories:</label>
            <select name="category" class="form-control">
              <option value="">Choose Category</option>

              {--accept data and loop--}
              
              @foreach($categories as $row)
              <option value="{{$row->id}}"
                @if($row->id == $post->category_id)
                {{'selected'}}
                @endif
                >{{$row->name}}</option>
              @endforeach

            </select>
          </div>


          <div class="form-group">
            <input type="submit" name="btbsubmit" class="btn btn-primary" value="Update">
          </div>


        </form>
      </div>
    </div>
  </div>

@endsection