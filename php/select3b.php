<head>
  <title>Interogare 3B</title>
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
$val = $_GET["text1"];
$gen= $_GET["select1"];
$moneda = $_GET["select2"];

$sql = "SELECT NUME,schimb(p.moneda,'".$moneda."',p.castig_net) as x
FROM Persoana p
WHERE SEX='".$gen."' AND CASTIG_NET>$val 
ORDER BY NUME;";
$result = $mysqli->query($sql);
echo "<h2>Persoane de sex $gen cu castig net mai mare de $val $moneda</h2>";
?>

<div class="container">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nume</th>
		<th>Castig Net</th>
		<th>Moneda</th>
      </tr>
    </thead>
    <tbody>

<?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	echo "<tr>";
echo"	<td>$row[NUME]</td> ";
echo"	<td>$row[x]</td> ";
echo"	<td>$moneda</td> ";
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