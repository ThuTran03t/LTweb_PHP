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
    session_start();
    $flag = 0;
    if (!empty($_POST["name"])&& !empty($_POST["mail"])&& !empty($_POST["add"]))
    {
        $inform= $_POST["name"]."-". $_POST["mail"]."-". $_POST["add"];
        set("khach_hang", $inform, time()+3600);
        $flag=1;
    }
    ?>
    <form action="" method="post">
        <table>
            <tr class="center">
                <td colspan="2">
                    THONG TIN DANG NHAP
                </td>
            </tr>
            <tr>
                <td>
                    Full Name:
                </td>
                <td>
                    <input name="name" type="text" id="name" value="<?php if (isset($_POST['name'])) echo $_POST["name"]; ?> " size="20"/>
                </td>
            </tr>
            <tr >
                <td >
                    Email:
                </td>
                <td>
                    <input  type="text" name="mail" value="<?php if (isset($_POST['mail'])) echo $_POST["mail"]; ?> " size="20"/>
                </td>
            </tr>
            <tr >
                <td >
                    Address:
                </td>
                <td>
                    <input  type="text" name="add" value="<?php if (isset($_POST['add'])) echo $_POST["add"]; ?> " size="20"/>
                </td>
            </tr>
            <tr class="center">
                <td colspan="2">
                    <button type="submit">
                        Conform
                    </button>
                </td>
            </tr>
        </table>
    </form>
    <font color="#1E50C4">
        <?php
            if ($flag==1)
            {
                echo "<table> <tr class='center'><td>";
                echo "<font color='#ffffff'> Thong tin khach hang: </br>";
                echo $_COOKIE["khach_hang"]. "<br>";
                echo "<a href='cookies_doc.php'> Click here </a>";
                echo "</td></tr></table>";
            }
    ?>
    </font>
</body>
</html>