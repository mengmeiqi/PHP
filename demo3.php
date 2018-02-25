<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>demo3</title>
</head>
<body>
<?php
    function my_test(){
        static $x = 0;
        echo $x;
        $x++;
    }
    my_test();//0
    my_test();//1
    my_test();//2
    //如果不用static,则结果为0,0,0
?>
</body>
</html>
