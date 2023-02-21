<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 2</title>
</head>
<style>
    #content{
        margin-left: 90px;
    }
.title{
    color:red;
}
.list_schools{
    display: grid ;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    gap:20px;
    list-style-type:none;
    
}
</style>
<body>
    <?php
        $schools = array(
            'Students' => array(
                'SV01' => array(
                    'name' => 'Hồ Thị Thu Trân ',
                    'birth' =>'30/06/2003',
                    'gender' =>'Nữ'
                ),
                'SV02' => array(
                    'name'=>'A Tiến',
                    'birth'=> '12/09/2003',
                    'gender'=>'Nam'
                ),
                'SV03' => array(
                    'name'=> 'Nguyễn Thị Hạ',
                    'birth' => '13/07/1992',
                    'gender' =>'Nữ'
                ),
                'SC04' => array(
                    'name' =>'Đỗ Dương Bảo Long',
                    'birth' =>'01/02/2003',
                    'gender' =>'Nam'
                ),
            ),
            'Teachers' => array(
                'GV01' => array(
                    'name' =>'Hoàng Văn Đạt',
                    'birth' =>'04/12/1997',
                    'gender' =>'Nam'
                ),
                'GV02' => array(
                    'name' =>'Phạm Quốc Cường',
                    'birth' =>'20/01/1993',
                    'gender' =>'Nam'
                ),
                'GV03' => array(
                    'name' =>'Trịnh Khắc Thưởng',
                    'birth' =>'15/01/1998',
                    'gender' =>'Nam'
                ),
                'GV04' => array(
                    'name' =>'Nguyễn Ngọc Vũ',
                    'birth' =>'29/04/1989',
                    'gender' =>'Nam'
                ),
            )
         )

    ?>

<div id="content" >
    <?php 
    foreach ($schools as $k => $v) {
        ?>
        <h2 class="title"><?php echo $k; ?></h2>
        <ul  class="list_schools">
            <?php foreach ($v as $k1 => $v1) {
                ?>
                <li>
                    <p><span>MaSV:</span> <?php echo $k1; ?></p>
                    <p><span>Tên:</span> <?php echo $v1['name'] ?></p>
                    <p><span>Ngày sinh:</span> <?php echo $v1['birth'] ?></p>
                    <p><span>Giới tính:</span> <?php echo $v1['gender'] ?></p>
                </li>
        <?php } 
        ?>
        </ul>
            
    <?php
    } 
    ?> 
</div>
</body>
</html>
