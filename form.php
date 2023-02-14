<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/function.css">
<title>Ví dụ 2</title>
<style>
    form{
        background-color: rgb(43, 161, 182);
        width: 400px;
        text-align:center;
        margin-left:auto ;
        margin-right: auto;
    }
    .submit{
        border-radius: 10px;
        width: 50px;
        border:none;
    }
    .submit:hover{
        background-color: rgb(194, 181, 39);
    }
    .name, .mile{
        width: 300px;
        height: 30px;
    }
</style>
</head>
<body>
    <form method="post" action="">
        <table>
            <tr>
                <td>Name:</td>
                <td>
                    <input type="text" name="name" class="name" value="<?php echo $_POST["name"] ?>">
                </td>
            </tr>
            <tr>
                <td> <br> </td>
                <td> <br></td>
            </tr>
            <tr>
                <td>Kết quả:</td>
                <td><input type="text" name="mile" class="mile" value="<?php echo display_name($_POST["name"]) ?>"></td>
            </tr>
            <tr>
                <td><br> </td>
                <td><br> </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" class="submit" value="In"></td>
            </tr>
        </table>
    </form>
<?php
error_reporting(0);
function display_name ($name) {
    echo "Hello " .$name;
}
?>

</body>
</html>