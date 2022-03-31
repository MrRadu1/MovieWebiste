<head>
  <title>Interogare 6B</title>
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
$sql = "SELECT s.nume as id1, AVG(castig_net) as id2, MAX(castig_net) as id3, MIN(castig_net) as id4
FROM Studio s JOIN Film f ON (s.nume=f.studio) JOIN Persoana p ON(f.id_producator=p.id_persoana)
GROUP BY s.nume;";
$result = $mysqli->query($sql);
echo "<h2>Castigul minim,maxim si mediu al producatorilor fiecarui studio </h2>";
?>

<div class="container">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nume Studio</th>
        <th>Castig net mediu</th>
		<th>Castig net maxim</th>
		<th>Castig net minim</th>
      </tr>
    </thead>
    <tbody>

<?php
if ($result->num_rows > 0) {

  // output data of each row
  while($row = $result->fetch_assoc()) {
	echo "<tr>";
echo"	<td>$row[id1]</td> ";
echo "<td>$row[id2]</td>";
echo "<td>$row[id3]</td>";
echo "<td>$row[id4]</td>";
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