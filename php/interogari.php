<html>
<head>
<title>Interogari</title>
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
<h1> Interogari </h1>
<br>
<div id="accordion">
<?php
include "db_connect.php";
?>

  <h3>Interogare 3</h3>
  <div>
<?php

include "form3.php";
?>
  </div>
  <h3>Interogare 4</h3>
  <div>
<?php

include "form4.php";
?>
  </div>
  <h3>Interogare 5</h3>
  <div>
<?php

include "form5.php";
?>
  </div>
  <h3>Interogare 6</h3>
  <div>
<?php

include "form6.php";
$mysqli->close();
?>
  </div>
 </div>
 <br>
 <a href="index.php"><p style="text-align:center">Return to main page</a>
</body>

</html>