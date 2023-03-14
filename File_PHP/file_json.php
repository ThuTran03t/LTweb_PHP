<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="form1" name="form1" method="post" action="p2_c4_b5_taoghidinhdang.php">
        <table width="350" border="0" align="center" cellpadding="2" bgcolor="#BD95B8">
            <tr bgcolor="#BDBAE7">
                <td colspan=-"2" bgcolor="#CC3366"> 
                    <div align="center">
                        <span class="style">
                            TẠO - GHI - ĐỌC FILE CÓ ĐỊNH DẠNG
                        </span>
                    </div>
                </td>
            </tr>
            <tr>
                <td><span class="style6">&nbsp; Tên file: </span></td>
                <td><iput nam,e="ten_file" type="text" id="ten_file" size="35" value="tap_tin/sap.txt"/></td>
            </tr>
            <tr>
                <td width="103" ><span class="style6">&nbsp; Đơn giá: </span></td>
                <td width="233" align="center">
                    <iput name="dg" type="text" id="dg" value="<?php echo $_POST[dg];?>" size="15"/>
                </lable></td>
            </tr>
            <tr>
                <td colspan="2" aligin="center">
                    <input type="submit" name="Submit" value="Ghi và đọc file"/>
            </tr>
        </table>
    </form>
<?php
    if(isset($_POST["ten_file"]))
    {
        $ten_file=$_POST["ten_file"];
        $ten_hang=$_POST["ten_hang"];
        $sl=$_POST["sl"];
        $dg=$_POST["dg"];
        $thanh_tien=$sl*$dg;
            $file=fopen("$ten_file","a",l);
            $san_pham=$en_hang."\t".$sl"\t".$dg"\t".$thanh_tien."\t";
            fwrite($file,$san_pham);
            fclose($file);
            echo"<p align='center' class='style6'> Tạo và ghi file thành công!</p>";
                    $file=fopen("$ten_file","r");
                echo "<table width='350' boredr='0' align='center' cellpadding='2' cellspacing='2' bgcolor='#DB95B8' class='style6'>";
                echo "<tr><td>";
                echo "<p align='center'> <B> Nội dung của file:</B><br></p>";
                echo "<table border='l' width='100%'>";
                echo "<tr>";
                    echo"<td> Tên hàng</td>";

    }

</body>
</html>