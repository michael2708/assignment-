<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <form action="assignment.php" method="post">
        First Num:  <input type="number" name="num1"><br>
        Second Num: <input type="number" name="num2"><br>
        <input type="submit" value="Submit">
    </form>

    <?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];


        function rangeFunc($num1, $num2){
            $diff = $num2 - $num1;
            $count = 0;
            $range = array();
            while($count < $diff){
                array_push($range, $num2);
                $num2--;
                $count++;
            }
        
            $range[$diff] = $num2--;

            $arrlength=count($range);
            for($x=0;$x<$arrlength;$x++){
                echo $range[$x];
                echo "<br>";
            }
        
            return $range;
        }

        $range = rangeFunc($num1, $num2);
        function sumOfArray($range){
            echo array_sum($range);
        }

        
        echo "The set of numbers are:";
        echo "<br>";
        rangeFunc($num1, $num2);
        echo "The sum of the numbers is";
        sumOfArray($range);

        

    ?>
</body>
</html>