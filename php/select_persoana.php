<head>
  <title>Tabela Persoana</title>
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
</style>
</head>
<body>
<?php

include "db_connect.php";

$sql = "SELECT * FROM Persoana";
$result = $mysqli->query($sql);
?>

<div class="container">
  <h2>Tabela Persoane</h2>  
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID Persoana</th>
        <th>Nume</th>
        <th>Adresa</th>
		<th>Sex</th>
		<th>Data Nasterii</th>
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
echo"	<td>$row[ID_PERSOANA]</td> ";
echo "<td>$row[NUME]";
echo "</td> <td>$row[ADRESA]</td> ";
echo " <td>$row[SEX]</td> ";
  echo " <td>$row[DATA_NASTERII]</td>";
echo " <td>$row[CASTIG_NET] </td> ";
echo"  <td>$row[MONEDA] </td> ";
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