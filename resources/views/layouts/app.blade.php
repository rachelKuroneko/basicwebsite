<!doctype html>
<html lang="en">
  <head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Hello, world!</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"> -->
  </head>
  <body>
	   @include('inc.navbar') 

  <!--If statement only for Home page to show case of the welcome to laravel page-->
	 <div class="container">
      @if(Request::is('/'))
        @include('inc.showcase')
      @endif 
      <div class="row">
    		<div class="col-md-8 col-xs-8">
          @include('inc.messages')
          @yield('content')
        </div>

        <div class="col-md-4 col-xs-4">
          @include('inc.sidebar')
        </div>

    	</div> 
    </div>

    <footer id="footer" class="text-center">
      <p>Copyright 2017 &copy; Rachel's Project</p>
    </footer>
  </body>
</html>