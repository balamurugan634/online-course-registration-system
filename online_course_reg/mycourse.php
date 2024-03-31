  


<?php
include 'connect.php';
session_start();
$logname=$_SESSION['log_name'];
$query="SELECT course FROM course_details WHERE name='$logname';";
$fire=mysqli_query($connection,$query) or die('query failed'.mysqli_error($connection));
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script> 
<center> <title style="text-align:center;">MY LEARNINGS</title></center>

<style>
.myButton2{
 background-color: red;
 color: red;
 padding:10px 20px;
 border:none;
 cursor:pointer;
 border-radius: 5px;
}
a{
        text-decoration:none;

    }
    body{
        width:100vw;
        height:100vh;
    }
    nav{
        height:10%;
        display:flex;
        align-items:center;
        justify-content:space-around;
        background:#010D26;
    }
    th{
      text-transform:uppercase;
    }
    

</style>

</head>
<body>
<center><h1>MY LEARNINGS</h1></center>

<table id="example" class="display" style="width:70%">
<thead>
<tr style="background:#010D26;color:white;">
<th  style="text-align:center;width: 20px;">COURSES</th> 
<th width="20" style="text-align:center;">Action</th>
</tr>
</thead>
<tbody>
<?php
if(mysqli_num_rows($fire)>0)
{
  while($result=mysqli_fetch_assoc($fire))
  { ?>
       <tr>
      <td style="text-align:center;"> <?php echo $result['course']; ?> </td> 
      <td  style="text-align:center;"><a href="delete.php?delete_id=<?php echo $result['course']; ?>& id2=<?php echo $logname?>" onclick="return confirm('sure to delete !'); " ><i class="fa fa-trash" style="font-size:20px;color:red;"></i></a>
 </td>
      </tr> 
      <?php 
  }  

  
  $total_students = $fire->num_rows;?>
 <tfoot>
  <th></th>
 <tr> 
    <td colspan=9 ><?php echo "Total courses: " . $total_students ?></td> 
  </tr> 
  </tfoot>
  <?php 
}
?>
</tbody>

</table>
<button class="myButton2"><a href="./welcome.php" class="text-light">Close</a></button><br><br>
</body>
<!-- 
<script>
function confirmDelete(xname,yname)
{

var result = confirm("Are you sure you want to delete "+xname+" course?");
if(result){
  alert("Record deleted!");
  location.replace("http://localhost/online_course_reg/delete.php?sid1="+xname);
  //windows.location.href="http://myproject/studentresult/delete.php"re
  //windows.open("https://www.w3schools.com")
  // windows.location.href="http://localhost/myproject/studentresult/delete.php?sid1="+xidnum;
  //windows.location.href="delete.php?sid1="+xidnum;
}
else
{
  alert("Deletion canceled.");
}
}
</script> -->


<script>

new DataTable('#example');

</script>

</html>