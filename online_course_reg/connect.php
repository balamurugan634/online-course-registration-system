<?php
$connection=new mysqli('localhost','root','','course_reg');
if($connection){
    #echo 'success';
}
else{
    die(mysqli_error($connection));
}

?>