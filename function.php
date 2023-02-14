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
function add_numbers(){
    echo 1+2;
}
add_numbers();
?>

<?php 
function display_name($name){
    echo"Hello" . $name;

}
display_name(" Martin Luther King");
?>

<?php  
function kilometers_to_miles ($kilometers = 0)
{
    $miles_scale = 0.62;
    return $kilometers * $miles_scale;
}
echo kilometers_to_miles(100);
?>
</body>
</html>