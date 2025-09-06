<html>
<head>
</head>
<body>
	<?php
		if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$math=$_POST["math"];
		$science=$_POST["sci"];
		$english=$_POST["eng"];
		$tot=($math+$science+$english);
		$percentage=($tot/300)*100;
		$grade="";
		if($percentage>=33 && $percentage<50)
		{
			$grade="D";
		}
		elseif($percentage>=50 && $percentage<70)
		{
			$grade="C";
		}
		elseif($percentage>=70 && $percentage<90)
		{
			$grade="B";
		}
		elseif($percentage>=90 && $percentage<=100)
		{
			$grade="A";
		}
	}
	?>
		<table border="1">
			<tr>
				<td>Maths</td>
				<td><?php echo "$math"; ?></td>
			</tr>
			<tr>
				<td>Science</td>
				<td><?php echo "$science"; ?></td>
			</tr>
			<tr>
				<td>English</td>
				<td><?php echo "$english"; ?></td>
			</tr>
			<tr>
				<td>Total</td>
				<td><?php echo "$tot"."/300"; ?></td>
			</tr>
			<tr>
				<td>Percentage</td>
				<td><?php echo "$percentage"."%"; ?></td>
			</tr>
			<tr>
				<td>Grade</td>
				<td><?php echo "$grade"; ?></td>
			</tr>
			
		</table>
</body>
</html>