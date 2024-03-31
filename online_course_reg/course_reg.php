<?php
    include 'connect.php';

    session_start();
    if(isset($_POST['submit'])){
        $cname=$_SESSION['cname'];
        $uname=$_POST['reg-uname'];
        $umail=$_POST['reg-umail'];
        $udept=$_POST['reg-udept'];
        $qry1="SELECT * FROM course_details WHERE name='$uname' AND course='$cname';";
        $res1=mysqli_query($connection,$qry1);
        if(mysqli_num_rows($res1) > 0){
            $error[] = 'already registered!';
        }
        else{
            $qry2="INSERT INTO course_details values(id,'$uname','$umail','$udept','$cname');";
            $res2=mysqli_query($connection,$qry2);
            if($res2){
                header('location:welcome.php');
            }
            else{
                die(mysqli_error($connection));
            }
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="./course-reg.css?v=<?php echo time(); ?>">
</head>
<body>
<?php if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg" style="color:red;text-align:center;position:absolute;top:10%;left:50%;font-size:20px;">'.$error.'</span>';
                }
               }?>
    <div class="container">
        <div class="container-top">
            <h1>Registration form</h1>
        </div>
        <div class="course-head">
            <h2>course : <?php echo $_SESSION['cname'];?></h2>
        </div>
        <form action="" method="post">

        <div class="form-elt"><div class="log-elt">
                <label for="reg-uname">username</label>
                <input type="text" id="reg-uname" name="reg-uname" value="<?php echo $_SESSION['log_name'];?>" required></div>
                <div class="log-elt">
                <label for="reg-umail">mail</label>
                <input type="email" id="reg-umail" name="reg-umail" value="<?php echo $_SESSION['log_mail'];?>" required></div>
                <div class="log-elt">
                <label for="reg-udept">department</label>
                <input type="text" id="reg-udept" name="reg-udept" value="<?php echo $_SESSION['log_dept'];?>" required></div>
            </div>
        <div class="regbtn">
            <input type="submit" value="register" name="submit">

        </div>
        </form>
    </div>
   
</body>
</html>