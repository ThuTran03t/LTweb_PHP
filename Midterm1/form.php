<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <title>Form</title>
</head>
<body>
    <style>
.container {
    margin-top: 30px;
    background: none;
}
#submit{
    background: #ff4500;
    border: none;
    margin-left: 220px;

}

</style>
<?php



if (isset($_POST['submit'])) {
    $firstname = mysqli_real_escape_string($con, $_POST['fname']);
    $lastname = mysqli_real_escape_string($con, $_POST['lname']);
    $emailid = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    if(mysqli_query($con, $sql))
        echo "Đăng ký thành công!";
    else
        echo "Lỗi! Vui lòng thử lại sau!!!";
}

?>
    <div class="container">
        <div class="col-xs-6 col-xs-offset-3 well">
            <form method="post" class="form-horizontal">

                
                <div class="form-group">
                    <div class="col-xs-12">
                        <label for="email"></label>
                        <input type="text" id="email" name="email" placeholder="Work Email" required data-parsley-type="email" data-parsley-trigger="keyup" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-6">
                        <label for="fname"></label>
                        <input type="text" id="fname" name="fname" placeholder=" First Name" required data-parsley-pattern="^[a-zA-Z ]+$" data-parsley-trigger="keyup" class="form-control" />
                    </div>
                    <div class="col-xs-6">
                        <label for="lname"></label>
                        <input type="text" id="lname" name="lname" placeholder="Last Name" required data-parsley-pattern="^[a-zA-Z ]+$" data-parsley-trigger="keyup" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <label for="password"></label>
                        <input type="password" id="password" name="password" placeholder="Password" required data-parsley-length="[8, 16]" data-parsley-trigger="keyup" class="form-control" />
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input type="submit" id="submit" name="submit" value="Sign Up" class="btn btn-primary" />
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
</html>