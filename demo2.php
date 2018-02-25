<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>demo2</title>
</head>
<body>
<script>
    var aa = "bb";
    alert(window["aa"]);

    var obj = {
        name:"lisi";
    }
    var key = "name";
    // alert(obj[key]);

</script>
<?php
//    $GLOBALS['aa'] = 'bb';
    $aa = 'bb';
    echo $GLOBALS['aa'];
?>
</body>
</html>
