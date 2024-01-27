<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
        This is my 1st php website.

        <?php
         echo "Hello world and this is printed using php";
         //Single line comment

         $var1 = 34;
         $var2 = 45;
         echo "<br>";
         echo $var1;
         echo "<br>";
         echo $var2;
         echo "<br>";
         echo $var1 + $var2;
         echo "<br>";

         echo var_dump(1==4);
         echo "<br>";
         $myVar = (true) and (true);
         echo var_dump($myVar);
         echo "<br>";

        ?>

        <?php
        define('PI',3,14); //Constant
        $var = "This is a String";
        echo var_dump($var);
        echo "<br>";
        $var = 67;
        echo var_dump($var);
        echo "<br>";

        ?> 
    </div>
</body>
</html>