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
$chieu_dai=$_POST[“chieu_dai”];
$chieu_rong=$_POST[“chieu_rong”];
$ket_qua=$chieu_dai*$chieu_rong;
?>
<?php
if($ket_qua>=0 && $ket_qua<100){
    echo 'Xay dung vila'
}
elseif
?>
<form id=”form1″ name=”form1″ method=”post” action=”dientichhinhchunhat.php”>
<table width=”400″ border=”0″ align=”center” bgcolor=”#E9D18B”>
<tr>
<td colspan=”2″ align=”center” bgcolor=”#FF6666″><h1 class=”style1″>Diện Tích Hình Chữ Nhật </h1></td>
</tr>
<tr>
<td width=”101″><strong>Chiều Dài </strong></td>
<td width=”283″><label>
<input name=”chieu_dai” type=”text” id=”chieu_dai” value=”<?php echo $_POST[“chieu_dai”];?>” />
</label></td>
</tr>
<tr>
<td><strong>Chiều Rộng </strong></td>
<td><label>
<input name=”chieu_rong” type=”text” id=”chieu_rong” value=”<?php echo $_POST[“chieu_rong”];?>” />
</label></td>
</tr>
<tr>
<td><strong>Diện Tích </strong></td>
<td><label>
<input name=”ket_qua” type=”text” id=”ket_qua” value=”<?php echo $ket_qua; ?>” readonly=”true” style=”background-color:#FF99FF” />
</label></td>
</tr>
<tr>
<td colspan=”2″ align=”center”><label>
<input type=”submit” name=”Submit” value=”Tính Diện Tích” />
</label></td>
</tr>
</table>
</form>
</body>
</html>