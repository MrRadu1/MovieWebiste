<head>
  <title>Interogare 4A</title>
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
$film = $_GET["text1"];
$sql = "SELECT s.nume as n1 ,s.adresa as a1, tara, id_presedinte, id_producator, p.nume, p.adresa, sex, data_nasterii, castig_net, moneda FROM Studio s JOIN Film f ON(s.nume=f.studio) JOIN Persoana p ON( f.id_producator = p.id_persoana) WHERE f.titlu='Iron Man 3';";
$result = $mysqli->query($sql);
echo "<h2>Detalii studio si producator pt filmul $film </h2>";
?>

<div class="container">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nume studio</th>
        <th>Adresa studio</th>
        <th>Tara</th>
		<th>ID_presedinte</th>
		<th>id_producator</th>
		<th>Nume producator</th>
		<th>Adresa producator</th>
		<th>sex</th>
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
echo"	<td>$row[n1]</td> ";
echo "<td>$row[a1]</td>";
echo "</td> <td>$row[tara]</td> ";
echo " <td>$row[id_presedinte]</td> ";
echo " <td>$row[id_producator] </td> ";
echo"  <td>$row[nume] </td> ";
echo "<td>$row[adresa]</td>";
echo "</td> <td>$row[sex]</td> ";
echo " <td>$row[data_nasterii]</td> ";
echo " <td>$row[castig_net] </td> ";
echo"  <td>$row[moneda] </td> ";
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