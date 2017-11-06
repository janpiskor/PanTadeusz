<html>
<head>
	<title>Pan Tadeusz</title>
	<meta charset="utf-8"/>
</head>
<body>

<?php

	for($i=1; $i<=12; $i++){
		echo "<li><a href='./index.php?ksiega=$i'>Ksiega $i</a></li>";
}

	if(!empty($_GET)){
		$k = $_GET['ksiega'];
		include_once("./k$k.html");
	}

?>
<!--
	<a href="./k1.html">Księga Pierwsza</a><br>
	<a href="./k2.html">Księga Druga</a><br>
	<a href="./k3.html">Księga Trzecia</a><br>
	<a href="./k4.html">Księga Czwarta</a><br>
	<a href="./k5.html">Księga Piąta</a><br>
	<a href="./k6.html">Księga Szósta</a><br>
	<a href="./k7.html">Księga Siódma</a><br>
	<a href="./k8.html">Księga Ósma</a><br>
	<a href="./k9.html">Księga Dziewiąta</a><br>
	<a href="./k10.html">Księga Dziesiąta</a><br>
	<a href="./k11.html">Księga Jedenasta</a><br>
	<a href="./k12.html">Księga Dwunasta</a><br>
	-->
</body>
</html>