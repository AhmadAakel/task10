<body>
    @extends('layouts.app')
    @section('title','posts')
    @section('content')
    <div class="container">
      <h1 class="my-4">Posts</h1>
      <div class="row">
        @forelse ($posts as $post)
        <div class="col-md-4 mb-4">
          <div class="card" style="width: 18rem;">
            @if ($post->image)
            <img src="{{asset('images/'.$post->image)}}" class="card-img-top" alt="image post" style="block-size: 25vh">
            @endif
            <div class="card-body">
              <h5 class="card-title">{{$post->title}}</h5>
              <a href="{{route('posts.show' , $post->id)}}" class="btn btn-warning btn-sm">view</a>
              <a href="{{route('posts.edit' , $post->id)}}" class="btn btn-primary btn-sm">edit</a>
              <form action="{{route('posts.destroy', $post->id)}}" method="POST" style="display: inline">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm"
                  onclick="return confirm('are you sure you want to delete this post?')">Delete</button>
              </form>
            </div>
          </div>
        </div>
        @empty
          <h2>No Posts</h2>
        @endforelse
    </div>
  </div>
    @endsection
</body>