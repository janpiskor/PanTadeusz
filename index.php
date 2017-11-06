<!DOCTYPE html>
<html>
<head>
	<title>Pan Tadeusz</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</head>
<body>

<header class="container">
<h1>Pan Tadeusz czyli ostatni zjazd na Litwie. <br>Historia szlachecka z roku 1811 i 1812 we dwunastu księgach wierszem</h1>
</header>

<div class = "container">
	<div class="row">
		<div class="col-md-3 col-xs-12">
			<div class="list-group">
			<?php 
	
			for($i=1; $i <=12; $i++)
			{
			echo "<a  href='./index.php?ksiega=$i' class='list-group-item list-group-item-action'>Księga $i</a>";
			}
			?>
			</div>
		</div>
		
		
		<div class="col-md-9 col-xs-12">
		<?php
			if (!empty($_GET))
			{
			$k = $_GET['ksiega'];
			include_once("./k$k.html");
			}
		?>
		</div>
	</div>
</div>

<footer>(c) Jan Piskor </footer>
	
	

</body>
</html>