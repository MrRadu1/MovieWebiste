<html>
	<head>
		<title>Baza de date film</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Monda" rel="stylesheet">
		
		<script src="js/jquery-1.11.0.min.js"></script>
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
		<script src="js/jquery.validate.min.js" type="text/javascript"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
	</head>
	<body style="background-color:powderblue;">
	<?php include "db_connect"; ?>
		<div class="priceing-table w3l">
			<div class="wrap">
				<h1 style="color:black;">Baza de Date Film</h1>
				<div class="priceing-table-main">
						<div class="price-grid">
							<div class="price-block agile">
								<div class="price-gd-top pric-clr2">
									<h4>Tabele</h4>
									<h5>Afisare Date</h5>
								</div>
								<div class="price-gd-bottom">
									<div class="price-list">
										<ul>
											<li>Tabela Film</li>
											<li>Tabela Persoane</li>
											<li>Tabela Studio</li>
											<li>Tabela Distributie</li>
										</ul>
									</div>
								</div>
								<div class="price-selet pric-sclr2">
									<form action="afisare_tabele.php">
									<button name="submit" type="submit" class="btn btn-primary">Accesare</button>
									</form>
								</div>
							</div>
						</div>
						<div class="price-grid">
							<div class="price-block agile">
								<div class="price-gd-top pric-clr1">
									<h4>Suciu Radu</h4>
									
									<h5>Grupa 9</h5>
								</div>
							</div>
						</div>
						<div class="price-grid wthree">
							<div class="price-block agile">
								<div class="price-gd-top pric-clr3">
									<h4>Interogari</h4>
									<h5>Afisare Date</h5>
								</div>
								<div class="price-gd-bottom">
									<div class="price-list">
										<ul>
											<li>Interogari ex 3</li>
											<li>Interogari ex 4</li>
											<li>Interogari ex 5</li>
											<li>Interogari ex 6</li>
										</ul>
									</div>
								</div>
								<div class="price-selet pric-sclr3">
									<form action="interogari.php">
									<button name="submit" type="submit" class="btn btn-primary">Accesare</button>
									</form>
								</div>
							</div>
						</div>
						<div class="clear"> </div>
						
				</div>
			</div>
		</div>

		<br /><br /><br /><br />
	</body>
</html>