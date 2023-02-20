<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kurslar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        body{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: #fffaf0;
            color:#212121;
            text-decoration: none;
            text-decoration-color: #212121;
        }

        .container{
            width: 80%;
            margin: auto;
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">KURSLAR</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a href="{{ route("courses.index") }}" class="nav-link active" aria-current="page" href="#">Etkinlikler</a>
              </li>
              <li class="nav-item">
                <a href="{{ route("courses.create") }}" class="nav-link active" aria-current="page" href="#">Yeni Etkinlik Ekle</a>
              </li>
              <li class="nav-item">
                <a href="{{ route("courses.index") }}" class="nav-link active" aria-current="page" href="#">Kurslar</a>
              </li>
              <li class="nav-item">
                <a href="{{ route("courses.create") }}" class="nav-link active" aria-current="page" href="#">Yeni Kurs Ekle</a>
              </li>
              <li class="nav-item">
                <a href="{{ route("students.index") }}" class="nav-link active" aria-current="page" href="#">Öğrenciler</a>
              </li>
              <li class="nav-item">
                <a href="{{ route("students.create") }}" class="nav-link active" aria-current="page" href="#">Yeni Öğrenci Ekle</a>
              </li>
            </ul>
            <form class="d-flex" role="search" method="POST" action="">
              @csrf
              <input class="form-control me-2" type="search" placeholder="Search" name="search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <div class="container">
        <hr>
        @yield("content")
        <hr>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>