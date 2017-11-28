<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="css/app.css" rel="stylesheet">
        <title>Categories</title>
        <script>
          window.Laravel = { csrfToken: '{{ csrf_token() }}' }
        </script>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">Home</a>
            </div>
          </div>
        </nav>
        <div class="container-fluid" id="app">
            <cat-list></cat-list>
        </div>
         <script src="js/app.js"></script>
    </body>
</html>
