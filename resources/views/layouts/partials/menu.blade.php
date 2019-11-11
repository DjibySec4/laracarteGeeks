<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{route('home')}}">Laracarte</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item {{set_active_link('home') }}">
        <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item  {{set_active_link('about') }}">
        <a class="nav-link" href="{{route('about')}}">About <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Artisan <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="fale">Planet</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="https://laravel.com">Laravel.com</a>
          <a class="dropdown-item" href="https://laravel.io">Laravel.io</a>
          <a class="dropdown-item" href="https://laracasts.com">Laracasts</a>
          <a class="dropdown-item" href="https://larajobs.com">Larajobs</a>
          <a class="dropdown-item" href="https://laravel-news.com">Laravel News</a>
          <a class="dropdown-item" href="https://larachat.co">Larachat</a>
        </div>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="#">Contact<span class="sr-only">(current)</span></a>
      </li>

    </ul>

    <ul class="nav navbar-nav navbar-right" >

      <li class="nav-item active">
        <a class="nav-link" href="#">Login<span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="#">Register <span class="sr-only">(current)</span></a>
      </li>

    </ul>

  </div>
</nav>