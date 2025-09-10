<html>
<head>
	<title>Form</title>
</head>
<body>
<?php
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$word=$_POST["word"];
	}
?>
	<table border="1">
			<tr>
				<td>Word</td>
				<td><?php echo $word;?></td>
			</tr>
			<tr>
				<td>Reverse</td>
				<td><?php echo strrev($word);?></td>
			</tr>
		</table>
</body>
</html>