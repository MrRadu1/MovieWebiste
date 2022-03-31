<head>
  <title>Interogare 5B</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
h2 {text-align: center;}
</style>
</head>
<body>
<?php

include "db_connect.php";
$sql = "SELECT titlu,an,gen,durata
 FROM Film
WHERE durata >=ALL
(SELECT durata
FROM Film);";
$result = $mysqli->query($sql);
echo "<h2>Detalii film cu durata cea mai mare</h2>";
?>

<div class="container">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Titlu</th>
		<th>An</th>
		<th>Gen</th>
		<th>Durata</th>
      </tr>
    </thead>
    <tbody>

<?php
if ($result->num_rows > 0) {

  // output data of each row
  while($row = $result->fetch_assoc()) {
	echo "<tr>";
echo"	<td>$row[titlu]</td> ";
echo"	<td>$row[an]</td> ";
echo"	<td>$row[gen]</td> ";
echo"	<td>$row[durata]</td> ";
echo "</tr>";
  }
} else {
  echo "0 results";
}
?>
</tbody>
  </table>
</div>
 <a href="index.php"><p style="text-align:center">Return to main page</a>
</body>
</html>