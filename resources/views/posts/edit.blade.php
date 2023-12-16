<body>
    @extends('layouts.app')
    @section('title','edit')
    @section('content')
  <div class="container">
    <h2>Edit Post</h2>
    <form action="{{route('posts.update', $post->id)}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="form-group mb-2">
        <label for="exampleFormControlInput1">Title</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value="{{$post->title}}">
      </div>
      <div class="form-group mb-2">
        <label for="exampleFormControlTextarea1">description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{$post->description}}</textarea>
      </div>
      <div class="form-group mb-2">
        <label for="exampleFormControlFile1">Example file input</label><br>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image"><br>
        @if ($post->image)
        <img src="{{asset('images/'.$post->image)}}" alt="current image">
        @endif
      </div>
      <button type="submit" class="btn btn-primary">Update Post</button>
      <a href="{{route('posts.index')}}" class="btn btn-secondary">Cancel</a>
    </form>
  </div>
    @endsection
</body>

