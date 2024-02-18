<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">alyaapunyaaa</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="/home">Home</a>
              <a class="nav-link" href="/students/all">Students</a>
              <a class="nav-link" href="/kelas/all">Kelas</a>
            </div>
          </div>
          @guest
          <span class="navbar-text">
          <a class="nav-link active" aria-current="page" href="/login/index">Login</a>
          </span>
          @else
          <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
            Hi, {{ Auth::user()->name }}
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
            <li>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="dropdown-item">Logout</button>
                </form>
            </li>
          </ul>
          </div>
        @endguest
        </div>
      </nav>
</body>
</html>
