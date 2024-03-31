<?php
include 'connect.php';
if(isset($_GET['uname'])){
    $upname=$_GET['uname'];
    $uppass=$_GET['upass'];
    $upmail=$_GET['umail'];
    $upage=$_GET['uage'];
    $updept=$_GET['udept'];
    $uptype=$_GET['utype'];

    $sql_query="UPDATE users set name='$upname',pass='$uppass',mail='$upmail',age=$upage,dept='$updept',utype='$uptype' WHERE name";
    $res=mysqli_query($connection,$sql_query);
    if($res){
        header('location:admin.php');

    }
    else{
        die(mysqli_error($connection));
    }

}
?>