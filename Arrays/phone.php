<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Dien Thoai Shop TT</title>

    <style>
        img{
            width: 220px;
            
        }
        .titles{
            text-align:center;
            background: orange ;
            color: white;
            font-size:  30px;
        }
        .price{
            color: red;
        }
       
    </style>
    
</head>
<body>
    <?php 
        $sanpham=array(
            'NỔI BẬT NHẤT'=>array(
                'sp1'=>array(
                    'img'=>'<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxzN5pIym6f0Q2v4sdS-aeCgsY7ZTisBOY4ubUCJjcGJCEeYLF2l3OAQx9M4N-sbxl1es&usqp=CAU"/>',
                    'name'=>'Nokia black future',
                    'Price'=>399090,
                ),
                'sp2'=>array(
                    'img'=>'<img src="https://p-vn.ipricegroup.com/uploaded_44f3cf4a8d6ec58c0da60512fcde7443.jpg"/>',
                    'name'=>'hawei nova 2i',
                    'Price'=>3990900,
                ),
                'sp3'=>array(
                    'img'=>'<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1fIqKePR66rrFifcgp_pIt9K_-fAzETWviQ&usqp=CAU"/>',
                    'name'=>'Nokia black future',
                    'Price'=>399090,
                ),
                'sp4'=>array(
                    'img'=>'<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqujwrVMtTiJHgDu_cQUTZ36G4SPHdE8VtWA&usqp=CAU"/>',
                    'name'=>'Nokia black future',
                    'Price'=>399090,
                ),
               
                ),

                'SẢN PHẨM MỚI NHẤT'=>array(
                    'sp01'=>array(
                        'img'=>'<img src="https://static.skyassets.com/contentstack/assets/blt143e20b03d72047e/bltab2d565224fbb987/6319db02937b9657b5f2b803/Carousel_iPhone14_Blue_Placement01-PreOrder.png"/>',
                        'name'=>'Nokia black future',
                        'Price'=>399090,
                    ),
                    'sp02'=>array(
                        'img'=>'<img src="https://p-vn.ipricegroup.com/uploaded_44f3cf4a8d6ec58c0da60512fcde7443.jpg"/>',
                        'name'=>'hawei nova 2i',
                        'Price'=>3990900,
                    ),
                    'sp03'=>array(
                        'img'=>'<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRbGmr-vAHKC_If0DlHAKe_02b7kE7yX0bxA&usqp=CAU"/>',
                        'name'=>'Nokia black future',
                        'Price'=>399090,
                    ),
                    'sp04'=>array(
                        'img'=>'<img src="https://www.vodafone.com.au/images/devices/apple/iphone-14-pro-max/iphone-14-pro-max-deep-purple-feature1-m.jpg"/>',
                        'name'=>'Nokia black future',
                        'Price'=>399090,
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
                       <div class="col-sm-2">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $vl1['img']  ?></h5>
                                <p class="card-text"><?php echo $vl1['name'] ?></p>
                                <p class="card-text"> <div class="price"><?php echo $vl1['Price'] ?> <span style="text-decoration:underline">đ</span></div></p>
                                <p class="card-text">
                                    <i class="fa fa-star" style="color:rgb(203, 203, 6);"></i>
                                    <i class="fa fa-star" style="color:rgb(203, 203, 6);"></i>
                                    <i class="fa fa-star" style="color:rgb(203, 203, 6);"></i>
                                    <i class="fa fa-star" style="color:rgb(203, 203, 6);"></i>
                                    <i class="fa fa-star" style="color:rgb(203, 203, 6);"></i>
                                    <span style="font-size:  10px;">500 đánh giá</span>
                                </p>
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