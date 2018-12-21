<!--
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="A page with tasty recipes">
    <title>Tasty Recipes</title>
    <link rel="stylesheet" href ="/css/app.css">
  </head>
  <body>
    @include('inc.navbar')

    <div class="container">
      @if(Request::is('/'))
      @include('inc.showcase')
      @endif
      <div class="row">
        <div class="col-md-12 col-lg-12">
          @yield('content')
        </div>
      </div>
    </div>
  </body>
</html>
