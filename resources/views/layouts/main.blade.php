<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>dominican</title>

    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    <!-- Bootstrap -->
    <link rel="shortcut icon" href="/images/logo-img.png" type="image/png"/>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/jquery.formstyler.css" rel="stylesheet">
    <link href="/css/jquery.formstyler.theme.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <header>
          @include('header')
      </header>
      <section>
          <div class="container {{ $contentClass OR '' }}">
              <div class="row">
                  @yield('content')
              </div>
          </div>
      </section>
      @include('footer')

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script type="text/javascript" src="js/jquery.formstyler.min.js"></script>
        <script type="text/javascript" src="js/form.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>