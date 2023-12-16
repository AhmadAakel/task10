<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>@yield('title','Vica')</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg  bg-secondary ">
        <div class="container">
          <a class="navbar-brand text-white" href="{{route('posts.welcom')}}">VicaBlog</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="{{route('posts.index')}}">Posts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="{{route('posts.create')}}">Create</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>
      @yield('content')
    </main>
    <footer>
      <div class="fixed-bottom bg-secondary text-white d-flex justify-content-center">
        <p>Created By Ahmad Akel</p>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>