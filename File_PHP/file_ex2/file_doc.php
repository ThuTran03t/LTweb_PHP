<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        .style1{
            color:#FFFFFF
            font-family: LucidaHandwriting, LucidaCalligraphy;
        } 
        .style6{ font-family: Verdana, Arial, Helvetica, sans-serif; font-size: smaller;}
        .file{
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- thi -->
    <form name = "form1" id="form1" action="file_doc.php" method="post">
        <table width="490" border="0" align="center" cellpadding="2" bgcolor="#DB95B8">
            <tr class=file bgcolor="#BDBAE7">
                <td  colspan="2" bgcolor="#CC3366"><p>TẠO - ĐỌC - GHI FILE</td>
            </tr>
            <tr>
                <td width="93">Tên file: </td>
                <td width="490">
                    <label for="ten_file">
                        <input type="text" name="ten_file" id="ten_file" value="<?php echo $_POST['ten_file']?>">
                    </label>
                </td>
            </tr>
            <tr>
                <td>Nội dung: </td>
                <td>
                    <label for="noidung">
                    <textarea type="text" name="noidung" id="noidung" cols="50" rows="4" value="<?php echo $_POST['noidung']?>"></textarea>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">
                        <input type="submit" name="Submit" id="Submit" value="Đọc và ghi file">
                    </label>
                </td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_POST['ten_file']) && isset($_POST['noidung'])){
            $ten_file =$_POST['ten_file'];
            $noidung =$_POST['noidung'];

            //Ghi fle
            $file = fopen("$ten_file","w",1);
            fwrite($file,$noidung);
            echo "<table width='500' align='center' bgcolor='#DB95B8' class='style6'><tr><td>";
            echo "<h3><p align ='center'>Đã ghi file thành công</p></h3>";
            fclose($file);

            // XUất file ra màn hình
            $file = fopen("$ten_file","r");
            echo "NỘI DUNG CỦA FILE: <br>";
            while(!feof($file)){  //while (!eof(f)) theo mình hiểu nghĩa là khi nào
                                  // chưa gặp kí tự kết thúc eof trong file thì sẽ còn thực hiện đọc kí tự có trong file.
                                  // Còn -1 nghĩa là trừ đi kí tự kết thúc chuỗi (hình như là \n hả j ak).
                $noidung = fgets($file,1000);
                echo nl2br($noidung);
            }echo "<h3><br> Đọc file thành công <br></h3>";
        
            echo "</td></tr></table>";
            fclose($file);
        }
        else{
            echo " <palign='center'>Hãy nhập đầy đủ nội dung </p>";
        }
    ?>
</body>
</html>