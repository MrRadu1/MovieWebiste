<head>
<title>Baza de date Film</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>

<style>
h1 {text-align: center;}
h2 {text-align: center;}
a {text-align: center;}
div {text-align: center;}
legend {text-align: center;}
</style>
</head>

<body>
<h1>Tabele Baza de Date</h1> <br> <br>
<form class="form-horizontal" action="select_film.php">
<fieldset>

	<label class="col-md-4 control-label" for="submit"></label>
	<div class="col-md-4">
		<button id="submit" name="submit" class="btn btn-primary">Afisare date tabela Film</button>
	</div>
</fieldset> 
</form>

<form class="form-horizontal" action="select_persoana.php">
<fieldset>

	<label class="col-md-4 control-label" for="submit"></label>
	<div class="col-md-4">
		<button id="submit" name="submit" class="btn btn-primary">Afisare date tabela Persoana</button>
	</div>


</fieldset> 
</form>

<form class="form-horizontal" action="select_studio.php">
<fieldset>

	<label class="col-md-4 control-label" for="submit"></label>
	<div class="col-md-4">
		<button id="submit" name="submit" class="btn btn-primary">Afisare date tabela Studio</button>
	</div>


</fieldset> 
</form>

<form class="form-horizontal" action="select_distributie.php">
<fieldset>

	<label class="col-md-4 control-label" for="submit"></label>
	<div class="col-md-4">
		<button id="submit" name="submit" class="btn btn-primary">Afisare date tabela Distributie</button>
	</div>


</fieldset> 
</form>
<hr>
 <a href="index.php"><p style="text-align:center">Return to main page</a>
</body>