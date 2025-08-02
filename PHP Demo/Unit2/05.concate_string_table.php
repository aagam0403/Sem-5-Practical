<?php
$str1="PHP";
$str2="is";
$str3="a";
$str4="powerful";
$str5="langauge";
$fullsentence=$str1." ".$str2." ".$str3." ".$str4." ".$str5;
?>

<!DOCTYPE html>
<html>
<head>
    <title?>String Output</title>
    <style>
        table{
            border-collapse:collapse;
            width:50%;
            margin:20px;
        }
        th,td{
            border:1px solid black;
            padding:10px;
        }
        th{
            background-color:#f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Individual string & concatenated Sentence</h2>
    <table>
        <tr>
            <th>Variable</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>String 1</td>
            <td><?php echo $str1;?></td>
        </tr>
        <tr>
            <td>String 2</td>
            <td><?php echo $str2;?></td>
        </tr>
        <tr>
            <td>String 3</td>
            <td><?php echo $str3;?></td>
        </tr>
        <tr>
            <td>String 4</td>
            <td><?php echo $str4;?></td>
        </tr>
        <tr>
            <td>String 5</td>
            <td><?php echo $str5;?></td>
        </tr>
        <tr> 
            <th>concatenated Sentence</th>
            <th><?php echo $fullsentence;?></th>
        </tr>
    </table>
    </body>
    </html>
