
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="../../../../favicon.ico">

<title>Blog Template for Bootstrap</title>

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">



<!-- Custom styles for this template -->
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
<link href="/css/blog.css" rel="stylesheet">
</head>

<body>
   @include('layouts.head')
   @if($message=session('message'))
    <div id="flash-message" class="alert alert-success" role="alert">
      {{ session('message','some dummy message') }}
    </div>
  @endif
  <main >

    <div class="container">
      <div class="row">
        <div class="col-sm-8 blog-main">
           @yield('content')
         </div>
        @include('layouts.sidebar')
      </div>
    </div>
  </main>
        @include('layouts/footer')

</body>
</html>