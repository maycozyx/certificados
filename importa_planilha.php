<?php
error_reporting(E_ALL ^ E_DEPRECATED);
ini_set('display_errors', 1 );
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<title></title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<style type="text/css">
		.break { page-break-before: always; }
		.altura {
			margin-top: 80mm;
		}
		p { 
			text-align: center;
			font-size: 28px;
			font-weight: bold;
			font-family: Verdana, Arial, Helvetica, sans-serif;
		}
	</style>
</head>
<body><?php
$arq = file("../dados5s.csv");
foreach ($arq as $temp_valor) { // c = coluna
      list( $c1 ) = explode(",", $temp_valor);
	  echo "<div class='altura'></div>";
      echo "<p>" . $c1 . "</p>";
	  echo "<br class='break'>";
}

?>
</body>
</html>