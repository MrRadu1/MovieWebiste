<head>
  <title>Interogare 3A</title>
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
$an = $_GET["text1"];
$gen= $_GET["select"];
$sql = "SELECT TITLU, AN, DURATA,GEN, STUDIO, ID_PRODUCATOR FROM Film WHERE GEN='". $gen."' AND AN>$an ORDER BY AN,TITLU;";
$result = $mysqli->query($sql);

?>
<h2>Filme aparute dupa <?php echo "$an"?> cu genul <?php echo "$gen"?></h2>
<div class="container">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Titlu</th>
        <th>An</th>
        <th>Durata</th>
		<th>Gen</th>
		<th>Studio</th>
		<th>ID_PRODUCATOR</th>
      </tr>
    </thead>
    <tbody>

<?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	echo "<tr>";
echo"	<td>$row[TITLU]</td> ";
echo "<td>$row[AN]";
echo "</td> <td>$row[DURATA]</td> ";
echo " <td>$row[GEN]</td> ";
echo " <td>$row[STUDIO] </td> ";
echo"  <td>$row[ID_PRODUCATOR] </td> ";
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