<?php 
include 'connect.php';

session_start();

if(isset($_POST['submit'])){
    $name=$_POST['uname'];
    $pass=$_POST['password'];
    $select = "SELECT * FROM users WHERE name='$name' AND upass='$pass' AND utype='client';";
    $result = mysqli_query($connection,$select);
    $select2="SELECT * FROM users WHERE name='$name' AND upass='$pass' AND utype='admin';";
    $result2=mysqli_query($connection,$select2);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        $_SESSION['log_name'] = $row['name'];
        $_SESSION['log_mail'] = $row['mail'];
        $_SESSION['log_age'] = $row['age'];
        $_SESSION['log_dept'] = $row['dept'];
        header('location:welcome.php');
}
elseif (mysqli_num_rows($result2) > 0) {
    header('location:admin.php');
}
else{
        $error[] = 'incorrect email or password!';
    
}

}
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css?v=<?php echo time(); ?> ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
.logo{
    align-items: center;
    justify-content: space-around;
    text-transform: uppercase;
    font-weight: bold;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    display: flex;
    height: 10%;
    width: 100%;
   color:white;
   background-color: #010D26;
    border-bottom:solid black 1px;
    }
    .log-elt{
    width: 100%;
    height: 40px;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    justify-content:space-between;
    color: #010D26;
    }
    .log-elt label{
    font-size: 25px;
    padding-right: 5px;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ;
    font-weight: bold;
    text-transform: uppercase;
    color:#010D26;
}
 </style>
</head>
<body>

    <div class="full-container">
        <div class="logo">
            <h1>online course registration system</h1>
            </div>
        <div class="login-container">
            <div class="login-container2">
            <h3><i class="fa fa-user"></i></h3>
            <form action="" method="post">
                <div class="log-elt">
                <label for="uname">username</label>
                <input type="text" autocomplete="off" name="uname" placeholder="enter username" required>
            </div>
            <div class="log-elt">
                <label for="upass">password</label>
                <input type="password" autocomplete="off" name="password" placeholder="enter password" required>
            </div>
            <input type="submit" value="Login" id="log" class="log" name="submit">
            <p>don't have account? <a href="./register.php">register</a></p>
            </form>
        </div>
        </div>
    </div>
    <?php
               if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg" style="color:red;text-align:center;position:absolute;top:20%;left:40%;">'.$error.'</span>';
                }
               }
                 

            ?>
   
</body>
</html>