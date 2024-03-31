<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
        $name=$_POST['uname'];
        $pass=$_POST['upass'];
        $mail=$_POST['umail'];
        $age=$_POST['uage'];
        $dept=$_POST['udept'];
    
        $qry="INSERT INTO users values('$name','$pass','$mail','$dept',$age,'client');";
        $result = mysqli_query($connection,$qry);
        if($result){
            header('location:index.php');
        }
        else{
            die(mysqli_error($result));
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="./style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="full-container">
        <div class="logo">
            <h1>Online course registration system</h1>
        </div>
        <div class="login-container">
            <div class="login-container2">
            <h3><i class="fa fa-user"></i></h3>
            <form action="" method="post">
                <div class="log-elt" style="justify-content:space-between;">
                <label for="uname">username</label>
                <input type="text" autocomplete="off" name="uname" id="uname" required>
            </div>
            <div class="log-elt"  style="justify-content:space-between;">
                <label for="upass">password</label>
                <input type="password" autocomplete="off" name="upass" id="upass" required>
            </div>
            <div class="log-elt"  style="justify-content:space-between;">
                <label for="umail">mail</label>
                <input type="email" autocomplete="off" name="umail" id="umail" required>
            </div>
            <div class="log-elt"  style="justify-content:space-between;">
                <label for="uage">age</label>
                <input type="number" autocomplete="off" name="uage" id="uage" required>
            </div>
            <div class="log-elt"  style="justify-content:space-between;">
                <label for="udept">department</label>
                <input type="text" autocomplete="off" name="udept" id="udept" required>
            </div>
            <input type="submit" value="Register" id="log" class="log" name="submit" style="width:150px;">
            <p>Already have an account? <a href="./index.php">Login</a></p>
        </div>
</body>
</html>