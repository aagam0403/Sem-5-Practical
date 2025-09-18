<html>
<head>
	<title>Form</title>
</head>
<body>
<?php
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$num=$_POST["num"];
		$res=1;
		for($i=$num;$i>0;$i--)
		{
			$res*=$i;
		}
	}
?>
	<table border="1">
			<tr>
				<th>Number:</th>
				<td><?php echo $num;?> </td>
			</tr>
			<tr>
				<th>Factorial</th>
				<td><?php echo $res;?></td>
			</tr>
	</table>
</body>
</html>