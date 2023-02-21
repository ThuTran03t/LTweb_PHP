<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ages=array("Peter"=>22, "Clark"=>32, "John"=>28);

    $ages["Peter"]="22";
    $ages["Clark"]="32";
    $ages["John"]="28";
    echo $ages["Peter"];
    ?>
</body>
</html>