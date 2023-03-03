<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Shop Giay va Tui xach</title>

    <style>
        img{
            width: 290px;
            
        }
        .titles{
            text-align:left;
            color: #ff4500 ;
            font-size:  20px;
        }
        .price{
            color: red;
        }
        button{
            background: orange;
            border-radius: 5px;
            border: none;
           
        }
        .container{
            text-align:center;
        }
       H1{
        text-align:center ;
        background: #5BBD2B;
       }
       body {
    background-color: #C9E4D6;
}
    </style>
    
</head>
<body>
    <H1 > Thu Tran Fasshion Shop </H1>
    <?php 
        $sanpham=array(
            'GIÀY DÉP'=>array(
                'sp1'=>array(
                    'img'=>'<img src="https://cf.shopee.vn/file/cd451f67b0c3053b1f8894c9b4097fed"/>',
                    'name'=>'Giày cao gót phong cách Hàn Quốc - Kem - SD02K',
                    'Price'=>400000,
                ),
                'sp2'=>array(
                    'img'=>'<img src="https://img2.dilyno.com/S1bee_c_oJ7jJ9Go1xXHc6Ualj-oCC3gOw3enmcPr_I/rs:fill:800:800:0/aHR0cDovL3MzLmFwLW5vcnRoZWFzdC0xLndhc2FiaXN5cy5jb20vaG5jLWNybS1zMy5nZXRjb252ZXJzaW9uLmNvL3dlYmVjb20vMjAyMi8xMC83YTg1MGVmMDhhYjRlYzhlMzM4NGJmZTg0NWZhOTU2Zi5wbmc.jpg"/>',
                    'name'=>'Giày cao gót đế xuồng WEDGE HEELS ',
                    'Price'=>600000,
                ),
                'sp3'=>array(
                    'img'=>'<img src="https://dvibeauty.com/wp-content/uploads/2019/08/mach-nang-cach-chon-giay-cao-got-dep-ma-khong-dau-chan-3.jpg"/>',
                    'name'=>'Giày cao gót công sở đế vuông Chunky Heels',
                    'Price'=>218000,
                ),
        
               
                ),

                'TÚI XÁCH'=>array(
                    'sp01'=>array(
                        'img'=>'<img src="https://salt.tikicdn.com/ts/product/02/9e/8a/6b86fbfe8fa936866356f6861cea8a08.jpg"/>',
                        'name'=>'Sale hot túi xách nữ da cao cấp T6868-11-2A-Xám',
                        'Price'=>500000,
                    ),
                    'sp02'=>array(
                        'img'=>'<img src="https://toplist.vn/images/800px/faya-bags-590880.jpg"/>',
                        'name'=>'Sale hot túi xách nữ da cao cấp T6868-11-2A-Trắng',
                        'Price'=>600000,
                        
                    ),
                    'sp03'=>array(
                        'img'=>'<img src="https://cf.shopee.vn/file/366b0384da7e7b049cf949b269ba2e90"/>',
                        'name'=>'Sale hot túi xách nữ da cao cấp T6868-11-2A-Trắng',
                        'Price'=>450000,
           
                    ),
               
                    
                )
        )
    ?>
    <?php 
        foreach($sanpham as $k=>$vl){ 
        ?>
        <div class="container"> <div class="titles"><?php echo $k ?></div></div>
        <div class="container">
                <div class="row">
                    <?php foreach($vl as $k1=>$vl1){ 
                    ?>
                       <div class="col-sm-4">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $vl1['img']  ?></h5>
                                <p class="card-text"><?php echo $vl1['name'] ?></p>
                                <p class="card-text"> <div class="price"><?php echo $vl1['Price'] ?> <span style="text-decoration:underline">đ</span></div></p>
                                <button onclick="myFunction()">Đặt mua</button>
                                <script>
                                function myFunction() {
                                alert("Thank you your order !");
                                }
                                </script>
                            </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    </div>
                </div>
        </div>
           
        
           
    <?php
    }
    ?>
</body>
</html>