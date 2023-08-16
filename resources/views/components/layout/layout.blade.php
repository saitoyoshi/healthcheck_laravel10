<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-dark-mode/1.0.2/bootstrap-dark-mode.min.css">
  <title>{{ $title }}</title>
</head>
<body class="container">
    <header class="pt-4 pb-2"><h1 class="">健康管理アプリ</h1></header>

    <hr>
    <main>
    {{ $slot }}
</main>
<footer class="py-4">
    @laravel
</footer>
</body>
</html>
