<html>
    <head></head>
    <body>
        <?php 
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                $name=$_POST["name"];
                $math=$_POST["math"];
                $science=$_POST["science"];
                $computer=$_POST["computer"];
                $english=$_POST["english"];
                $ss=$_POST["ss"];
                $total=($math+$science+$computer+$english+$ss);
                $percent=($total/500)*100;
                $result="";
                $grade="";
                if($percent < 33)
                {
                    $result="Fail";
                    $grade="F";
                }
                elseif($percent >=33 && $percent<50)
                {
                    $result="Pass";
                    $grade="D";
                }
                elseif($percent >=50 && $percent<65)
                {
                    $result="Pass";
                    $grade="C";
                }
                elseif($percent >=65 && $percent<80)
                {
                    $result="Pass";
                    $grade="B";
                }
                elseif($percent >=80 && $percent<90)
                {
                    $result="Pass";
                    $grade="A";
                }
                elseif($percent >=90 && $percent<95)
                {
                    $result="Pass";
                    $grade="A+";
                }
                elseif($percent >=95 && $percent<100)
                {
                    $result="Pass";
                    $grade="A++";
                }                
                elseif($percent == 100)
                {
                    $result="Pass";
                    $grade="O+";
                }
            }
        ?>
        <h1><?php echo "Result for $name"; ?></h1>
        <table border="1">
            <tr>
                <th>Subjects</th>
                <th>Marks</th>
            </tr>
            <tr>
                <td>Math</td>
                <td><?php echo $math; ?></td>
            </tr>
            <tr>
                <td>Science</td>
                <td><?php echo $science; ?></td>
            </tr>
            <tr>
                <td>Computer</td>
                <td><?php echo $computer; ?></td>
            </tr>
            <tr>
                <td>English</td>
                <td><?php echo $english; ?></td>
            </tr>
            <tr>
                <td>Social Studies</td>
                <td><?php echo $ss; ?></td>
            </tr>
            <tr>
                <td>Total</td>
                <td><?php echo $total." / 500"; ?></td>
            </tr>
            <tr>
                <td>Percentage</td>
                <td><?php echo $percent."%"; ?></td>
            </tr>
            <tr>
                <td>Result</td>
                <td><?php echo $result; ?></td>
            </tr>
            <tr>
                <td>Grade</td>
                <td><?php echo $grade; ?></td>
            </tr>
        </table>
    </body>
</html>