<?php
session_start();

require_once 'functions.php';


if(!empty($_GET['id'])){
     $student_id = $_GET['id'];
        //  $student_infor = $_SESSION['student'][$student_id];
         unset($_SESSION['student'][$student_id]);

      
}else{
     redirect('list.php');
     
}
?>
<style>
.btn{
        text-decoration: none;
        background-color: red;
        color:#fff;
        padding: auto;


    }
</style>
   <a href="list.php" class="btn"> Danh sách sinh viên</a> 
