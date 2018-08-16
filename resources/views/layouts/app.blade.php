<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{ config('app.name') }}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  
<div class="container">
	<!------------ NAVBAR ------------------>
  	<nav class="navbar navbar-dark bg-primary">
	  	<div class="container-fluid">
	  		<div class="navbar-header">
	  			<a href="/" class="navbar-brand white_color">Dent 32</a>  			
	  		</div>
	  		<ul class="nav navbar-nav">
	  			<li class="nav-item">
	  				<a href="/" class="white_color">Pacijenti</a>
	  			</li>
	  			<li class="nav-item active">
	  				<a href="/medical" class="white_color">Kartoni</a>
	  			</li>
	  		</ul>
	  		<div class="navbar-right">
	  			<button class="btn btn-danger navbar-btn">Novi pacijent</button>
	  		</div>	
	  	</div>
  	</nav>
  <!------------ END OF NAVBAR ------------------>
	
	@yield('content')
	
</div>

</body>
</html>