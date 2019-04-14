<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TodoApp</title>
  <link rel="stylesheet" href="/css/app.css">
</head>
<body>
  @include('inc.navbar')
  <br>
  <br>
  <div class="container">
    @include('inc.messages')
      @yield('content')
  </div>
  <footer id="footer" class="text-center">
      <p> Copyright &copy;2019 TodoApp</p>
  </footer>
</body>
</html>