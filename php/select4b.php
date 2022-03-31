<head>
  <title>Interogare 4B</title>
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

$sql = "SELECT a.id_actor as id1, b.id_actor as id2, a.titlu_film as id3
    FROM Distributie a JOIN Persoana p ON(a.id_actor=p.id_persoana) JOIN Distributie b ON (a.titlu_film = b.titlu_film) JOIN Persoana q ON(b.id_actor=q.id_persoana) 
    WHERE p.sex!=q.sex and a.id_actor < b.id_actor;";
$result = $mysqli->query($sql);
echo "<h2>Perechi de actori de sex diferit ce au jucat in acelasi film</h2>";
?>

<div class="container">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID 1</th>
		<th>ID 2 </th>
		<th>Film </th>
      </tr>
    </thead>
    <tbody>

<?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	echo "<tr>";
echo"	<td>$row[id1]</td> ";
echo"	<td>$row[id2]</td> ";
echo"	<td>$row[id3]</td> ";
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