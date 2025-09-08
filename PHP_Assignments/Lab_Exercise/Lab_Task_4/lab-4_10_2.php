<html>
<head>
</head>
<body>
<?php
		if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$n1=$_POST["n1"];
		$n2=$_POST["n2"];
		$result=product($n1,$n2);
	}
?>
<?php
	function product($a,$b)
	{
		return ($a*$b);
	}
?>
		<table border="1">
			<tr>
				<td>Number 1</td>
				<td><?php echo "$n1"; ?></td>
			</tr>
			<tr>
				<td>Number 2</td>
				<td><?php echo "$n2"; ?></td>
			</tr>
			<tr>
				<td>Product</td>
				<td><?php echo "$result"; ?></td>
			</tr>
		</table>
</body>
</html>