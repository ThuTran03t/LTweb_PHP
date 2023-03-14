<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td bgcolor="#CC0066">
            <?php
        $file=fopen("tap_tin\sang_thang_nam.txt","r",l);
        if (!$file)
        {
            echo "<br> Không thể mở được file này.<br>";
            exit;
        }
        else{
            echo "<p align='center' class='style'><font clolor='#ffffff'";
            echo "<b></b><br>";
                while (!feof($file))
                {
                    $noi_dung = fgets ($file);
                    echo nl2br ($noi_dung);
                }
                ECHO "<br><b> Mở và đọc file thành công!</b>";
                echo "</font></p>";
        }
        fclose($file);
        ?>
        </td>
    </tr>
    </table>
</body>
</html>