<html>
<head>
	<title>Form</title>
</head>
<body>
<?php
	function check($a)
	{
		if($a%2==0)
		{
			return "Even";
		}
		else
		{
			return "Odd";
		}
	}
?>
<?php
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$num=$_POST["num"];
		$res=check($num);
	}
?>
	<table border="1">
			<tr>
				<th>Number:</th>
				<td><?php echo $num;?> </td>
			</tr>
			<tr>
				<th>Result</th>
				<td><?php echo $res;?></td>
			</tr>
	</table>
</body>
</html>