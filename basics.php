<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        this is my first php website
        <?php
        echo "this is printed using php"
        ?>
         <?php
      

        
        $v1=31;
        $v2=2; echo "<br>";
        echo $v1 + $v2;

        //oprators in php;
        //1 arthmetic operator;
        echo "the value of variable1+ varibale2 is";
        echo "<br>";

        echo $v1 + $v2;
echo "minu of v1 and v2 is";
        echo $v1- $v2;
        echo "<br>";
echo "division of v1 and v2 is  ";
        echo $v1/$v2;
        echo "<br>";

        echo "multiplication of v1 and v2 is";
        echo $v1*$v2 ;

        //assigment op;

        echo "this is assigment operators";
        var_dump($v1==$v2);
        echo "<br>";

        echo("this is less then op");
        var_dump($v1<$v2);
        echo "<br>";


        echo("this is greater then op");
        var_dump($v2>$v1);
        echo "<br>";

        echo("this is not equal to");
        var_dump($v1!==$v2);
        echo "<br>";


        echo("this is greater than equal to");
        var_dump($v1>=$v2);
        echo "<br>";

        echo("this is less than equal to");
        var_dump($v1<=$v2);
        echo "<br>";
//increment /decrement op;


$v1++;
echo("<h1>$v1</h1>");
echo('<br>');
$v1--;
echo($v1);
//it also has preincrement conditions suchs as ++$v1; and $v--

      
        
        //logical op

        //and(&&) //or(||) //xor(xor) // not!

        $myvar=true;
        $myname=false;
        echo var_dump($myvar&&true);

        //in and op both the values should be true then only it pasess the function;
        //in or(|| )op one of the condtion if one of the condition is true then only the condition can be true;
        // 


        
        ?>
         <?php
        echo "hello world again from php3"
        ?>
    </div>
</body>
</html>