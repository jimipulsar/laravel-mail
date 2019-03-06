<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Laravel Mail</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbarmenu">
      <a class="navbar-brand" href="#">LaraMail</a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('admission.index') }}">Iscriviti </a>
              </li>
          </ul>
      </div>
    </nav>

    @yield('content')
  </body>
</html>
