<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>@yield("head-title")</title>
</head>
<body>
  <header class="text-center">
    <h1 class="align-middle">@yield("header-title")</h1>
  </header>

  <main>
    <div class="container mt-5">
      @yield("main-content")
    </div>
  </main>

</body>
</html>
