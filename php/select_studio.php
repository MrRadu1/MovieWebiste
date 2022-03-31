<head>
  <title>Tabela Studio</title>
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

$sql = "SELECT * FROM Studio";
$result = $mysqli->query($sql);
?>

<div class="container">
  <h2>Tabela Studio</h2>          
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nume</th>
        <th>Adresa</th>
		<th>Tara</th>
		<th>ID_Presedinte</th>
      </tr>
    </thead>
    <tbody>

<?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	echo "<tr>";
echo"	<td>$row[NUME]</td> ";
echo "<td>$row[ADRESA]";
echo "</td> <td>$row[TARA]</td> ";
echo"  <td>$row[ID_PRESEDINTE] </td> ";
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