<html>
<head>
	<title>Form</title>
</head>
<body>
<?php
	function check2($a)
	{
		if($a%2==0)
		{
			return "Yes";
		}
		else
		{
			return "No";
		}
	}
	function check3($a)
	{
		if($a%3==0)
		{
			return "Yes";
		}
		else
		{
			return "No";
		}
	}
	function check6($a)
	{
		if($a%2==0)
		{
			return "Yes";
		}
		else
		{
			return "No";
		}
	}
?>
<?php
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$num=$_POST["num"];
		$res1=check2($num);
		$res2=check3($num);
		$res3=check6($num);
	}
?>
	<table border="1">
			<tr>
				<th>Number:</th>
				<td><?php echo $num;?> </td>
			</tr>
			<tr>
				<th>Divisible by 2</th>
				<td><?php echo $res1;?></td>
			</tr>
			<tr>
				<th>Divisible by 3</th>
				<td><?php echo $res2;?></td>
			</tr>
			<tr>
				<th>Divisible by 2 & 3</th>
				<td><?php echo $res3;?></td>
			</tr>
	</table>
</body>
</html>