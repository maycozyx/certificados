<?php
error_reporting(E_ALL ^ E_DEPRECATED);
ini_set('display_errors', 1 );
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<title></title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<style type="text/css">
		p { 
			text-align: center;
		}
	</style>
</head>
<body>
<?php
$arq = file("../dados5s.csv");
foreach ($arq as $temp_valor) { // c = coluna
      list( $c1 ) = explode(",", $temp_valor);
      echo "<p>" . $c1 . "</p>";
}

?>
</body>
</html>