<body>
    @extends('layouts.app')
    @section('title','show')
    @section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
              <h3 class="card-title">{{$post->title}}</h3>
              <p class="card-text"><small class="text-body-secondary">{{$post->created_at}}</small></p>
              <p class="card-text">{{$post->description}}</p>
            </div>
            <img src="{{asset('images/'. $post->image)}}" class="card-img-bottom" alt="Post Image">
        </div>
        <div class="mt-2">
            <a href="{{route('posts.index')}}" class="btn btn-secondary">Back To Posts</a>
        </div>
    </div>
    @endsection
</body>