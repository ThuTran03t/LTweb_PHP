<!DOCTYPE html>
<html>
<head>
    <title>Hóa đơn thanh toán </title>
    <style>
    #tinhtien{
        text-align: center;
        background-color: #f53b57;
        font-weight: bold;
        font-size: 30px;
      
    }
    table{
        background-color: #f78fb3;
        margin-left: auto;
        margin-right: auto;
    }
    #tinh{
        margin-left: 130px;
        border-radius: 3px;
        border: none;

    }
    #cancel{
        margin-right: 150px;
        border-radius: 3px;
        border: none;

        
    }
    h1{
        color: #f53b57;
        

    }
     #cancel:hover{
        background-color: #546de5
    }
    #bill{
        margin-left: 350px;
    
    }
   
    #tinh:hover{
        background-color: #546de5
    }

    
</style>
</head>
<body>
   
<?php
    $loaiPhong = $_POST["loaiPhong"];
    $checkin = strtotime( $_POST["checkin"]);
    $checkout = strtotime($_POST["checkout"]); 
    $gioThue = (floor( abs($checkout- $checkin) / (60*60*24)))*24;
    $tienAn = $_POST["an"];
    $giat = $_POST["giat"];
    $anSangBuffer = $_POST["an"];
    $tam = $_POST["tam"];
    $dichVu = $giat + $tienAn + $tam;
    $tong = (int)$tienAn +(int) $dichVu + ((int)$loaiPhong * (int)$gioThue);

?>
    <form action="" method="post">
        <table  >
            <tr class="title">
                <td id="tinhtien" colspan="2">
                    TÍNH TIỀN
                </td>
            </tr>
            <tr>
                <td>
                     LOẠI PHÒNG
                </td>
                <td>
                    <select name="loaiPhong">
                        <option value="1000">A</option>
                        <option value="500">B</option>
                        <option value="200">C</option>
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    CHECK-IN
                </td>
                <td>
                    <input type="datetime-local" name="checkin" value="">
                </td>
            </tr>
            <tr>
                <td>
                    CHECK-OUT
                </td>
                <td>
                    <input type="date" name="checkout"  value="">
                </td>
            </tr>           
            <tr>
                <td>
                    TIỀN ĂN
                </td>
                <td>
                    <input type="text" name="an" value=" ">
                </td>
            </tr>
            <tr>
                <td>
                    DỊCH VỤ
                    
                </td>
                <td >
                    <input  type="checkbox" name="giat" value="300 ">GIẶT LÀ 
                    <input  type="checkbox" name="an" value="500">ĂN SÁNG
                    <input  type="checkbox" name="tam" value="200 ">TẮM HƠI 
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button id="tinh"  >Tính</button>
                    <button id="cancel">Cancel</button>
                </td>
                 
            </tr>

        
        </table>
    </form >

   
    <form action=""  method="post" id="bill"  >
    <h1>BILL</h1>
        <b>TypeRoom: </b>  
            <input type="text" value="<?php echo $loaiPhong ?>"> <br> <br>
        <b>Rental hours:</b>
            <input type="text" value="<?php echo $gioThue?>"> <br> <br>
        <b> Money for meals:</b>
            <input type="text" value="<?php echo $tienAn ?>"> <br> <br>
        <b> Money for service:</b>
             <input type="text" value="<?php echo $dichVu ?>"> <br> <br>
        <b>Total:</b>
            <input type="text" value="<?php echo $tong?>"> <br> <br>
    </form>

    
</body>

</html>