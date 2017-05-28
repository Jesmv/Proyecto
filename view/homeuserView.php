<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Song to Song</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active "><a class="link" href="#">Home</a></li>
            <li><a class="link" href="#about">About</a></li>
            <li><a class="link"  href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	

	<div class="container">
		<form>
			<h1>Buscar musica</h1>
			<div class="row">
				<div class="col-lg-12">
					<div class="input-group">
						<input type="text"  autocomplete="off" class="form-control typeahead" >
						<span class="input-group-btn">
							<input type="submit" class="btn btn-default" type="button">Go!</input>
						</span>
					</div><!-- /input-group -->
				</div><!-- /.col-lg-6 -->
			</div><!-- /.row -->
		</form>

		<audio id="player" controls>
			<source src="" type="audio/mpeg">
		</audio>
		

	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="js/bootstrap3-typeahead.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>