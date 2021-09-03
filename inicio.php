<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>
	<?php
	function promedio($v1, $v2)
	{
		$pro = $v1 / $v2;
		return $pro;
	}
	$v1 = 12;
	$v2 = 13;

	$p = promedio($v1, $v2);
	echo $p;

	?>
	<select name=”nombre”>

		<option> Opcion 1 </option>

		<option> Opcion 2 </option>

	</select>
</body>

</html>