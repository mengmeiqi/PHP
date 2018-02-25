<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>demo1</title>
</head>
<body>
<?php
    echo "这是Demo1";
    echo "</br>";
    $x = 5;
    function my_test(){
        global $x;
        $y = 10;
        $x = $x + $y;
        echo "x的值是：$x";
        echo "</br>";
        echo "y的值是：" .$y;
        echo "</br>";
    }
    my_test();
    $x = $x + 5;
    echo "x的值是：$x";
?>
</body>
</html>