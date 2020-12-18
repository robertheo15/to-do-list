<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div id="app">
        
    @include('layouts.navigation')
    <main class="py-4">
        @yield('content')
    </main>
    @include('layouts.footer')
</div>
</body>
</html>

