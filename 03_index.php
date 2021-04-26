<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hei</h1>
    <?php
    if (array_key_exists("a",$_GET) && array_key_exists("b",$_GET)) {
        $a = $_GET['a'];
        $b = $_GET['b'];
        echo $a + $b;
    } else {
        ?>        
        <span style="color: red">Angi URL-parametre, a og b</span>
        <?php
    }
    ?>
</body>

</html>