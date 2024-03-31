<?php
include 'connect.php';
if(isset($_GET['delete_id'])){
    $uname=$_GET['id2'];
    $ucourse=$_GET['delete_id'];
    $sql_query="DELETE FROM course_details WHERE name='$uname' AND course='$ucourse';";
    $res=mysqli_query($connection,$sql_query);
    if($res){
        header('location:coursedetails.php');

    }
    else{
        die(mysqli_error($connection));
    }

}
?>