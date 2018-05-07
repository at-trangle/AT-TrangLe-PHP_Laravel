<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>PHP Laravel</title>
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/menu.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
  <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
</head>
<body>
    
  <div class="add-news">
    <a href="/news">Home</a>
    <a href="/news/create">Add news</a>
  </div>
  @yield('content')
  
</body>
</html>
