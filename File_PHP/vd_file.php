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
$filename = 'C:\xampp\htdocs\LTweb_PHP\php\Function';

if (file_exists($filename)) {
    echo "File này $filename tồn tại";
} else {
    echo "File này $filename Không tồn tại";
}
?>
</body>
</html>