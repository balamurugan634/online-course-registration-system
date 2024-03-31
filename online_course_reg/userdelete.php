<?php
include 'connect.php';
if(isset($_GET['delete_id'])){
    $uname=$_GET['delete_id'];
    $sql_query="DELETE FROM users WHERE name='$uname';";
    $res=mysqli_query($connection,$sql_query);
    if($res){
        header('location:admin.php');

    }
    else{
        die(mysqli_error($connection));
    }

}
?>