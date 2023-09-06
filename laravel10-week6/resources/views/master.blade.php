<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blade - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

    @include('layout.navbar')

    <div class="container shadow ronded-top mt-3 p-2">
        <div class="row">

          <div class="col-md-4">
            <ul class="list-group">
                <li class="list-group-item active" aria-current="true">MENU</li>
                <li class="list-group-item"><a href="{{ url('home')}}"class="text-decoration-none">home</a></li>
                <li class="list-group-item"><a href="{{ url('about')}}"class="text-decoration-none">about</a></li>
                <li class="list-group-item"><a href="{{ url('contact')}}"class="text-decoration-none">contact</a></li></li>
              </ul>
          </div>

          <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @yield('content')
                </div>
            </div>
          </div>

        </div>

      </div>
      @include('layout.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>

