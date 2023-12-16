<body>
    @extends('layouts.app')
    @section('title','create')
    @section('content')
    <div class="container">
      <h1>Crete Post</h1>
      @if($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mt-2">
          <label for="exampleFormControlInput1">Title</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name="title">
        </div>
        <div class="form-group mt-2">
          <label for="exampleFormControlTextarea1">description</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
        </div>
        <div class="form-group mt-2">
          <label for="exampleFormControlFile1">image</label><br>
          <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image"><br>
        </div>
        <button type="submit" class="btn btn-primary mt-4">Create Post</button>
      </form>
  </div>
    @endsection
</body>

