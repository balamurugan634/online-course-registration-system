<?php 
    include 'connect.php';
    $query="SELECT * FROM users;";
           

    $fire=mysqli_query($connection,$query) or die('query failed'.mysqli_error($connection));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            overflow:hidden;

        }
        .myButton2{
               background-color: red;
               color: red;
               padding:10px 20px;
               border:none;
               cursor:pointer;
               text-decoration:none;
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
    h1{
        color:white;
        width:30%;
        height:100%;
        font:30px sans-serif bold;
        display:flex;
        align-items:center;
        justify-content:center;
    }
    .menu{
        width:40%;
        width:30%;
        height:100%;
        display:flex;
        align-items:center;
        justify-content:space-around;
        list-style:none;
    }
    .menu li{
        width:33%;
        height:70%;
        display:flex;
        align-items:center;
        justify-content:center;
    }
    .menu li a{
        font-size:20px;
        font-weight:bold;
        color:black;
        text-transform:uppercase;
    }


    </style> 
</head>
<body>
    <nav>
    <h1>ADMIN PANEL</h1>
    <div class="menu"><li><a href="admin.php" class="active" style="color:red;">users</a></li>
    <li><a href="coursedetails.php" style="color:white;">course details</a></li></div>
    </nav>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr  style="background:#010D26;color:white;">
            <th width="30" style="text-align:left;text-transform:uppercase;
">name</th> 
            <th width="50" style="text-align:left;   text-transform:uppercase;
">password</th>
            <th width="20" style="text-align:left;        text-transform:uppercase;
">mail</th>
            <th width="35" style="text-align:left;        text-transform:uppercase;
">department</th>
            <th width="35" style="text-align:left;        text-transform:uppercase;
">age</th>
            
            <th width="35" style="text-align:left;        text-transform:uppercase;
">user type</th>
            <!-- <th width="35" style="text-align:left;">edit</th> -->
            <th width="35" style="text-align:left;        text-transform:uppercase;
">delete</th>


            </tr>
        </thead>
        <tbody>
           <?php
            if(mysqli_num_rows($fire)>0)
            {
                while($result=mysqli_fetch_assoc($fire))
                { ?>
                     <tr>
                    <td style="text-align:center;"> <?php echo $result['name']; ?> </td> 
                    <td style="text-align:center;"> <?php echo $result['upass']; ?> </td>
                    <td style="text-align:center;"> <?php echo $result['mail']; ?> </td>
                    <td style="text-align:center;"> <?php echo $result['dept']; ?> </td>
                    <td style="text-align:center;"> <?php echo $result['age']; ?> </td>
                    <td style="text-align:center;"> <?php echo $result['utype']; ?> </td>                                      
                      <!-- <td style="text-align:center;"><a href="update_student_details.php?studid=<?php echo $result['id'];?>"><i class="fa fa-edit" style="font-size:20px;color:blue;"></i></a> </td>  -->
                      <!-- <td  style="text-align:center;"><a href="userupdate.php?uname=<?php echo $result['name']; ?>& upass=<?php echo $result['upass'];?>& umail=<?php echo $result['mail'];?>& udept=<?php echo $result['dept'];?>& uage=<?php echo $result['age'];?>& utype=<?php echo $result['utype'];?>" onclick="return confirm('sure to update !'); " ><i class="fa fa-edit" style="font-size:20px;color:green;"></i></a> </td> -->
                      <td  style="text-align:center;"><a href="userdelete.php?delete_id=<?php echo $result['name']; ?>" onclick="return confirm('sure to delete !'); " ><i class="fa fa-trash" style="font-size:20px;color:red;"></i></a> </td>
                    </tr> 
                    <?php 
                }  

                
                $total_students = $fire->num_rows;?>
                
               <tfoot>
                <th></th>
               <tr> 
                 <td colspan=9 ><?php echo "Total records: " . $total_students ?></td>
                </tr> 
                </tfoot>
                <?php 
            }
            ?>
            </tbody>
    
            </table>
            <button class="myButton2"><a href="index.php" class="text-light">Close</a></button><br><br>

    
            <script>
    
    new DataTable('#example');
         
  </script>

</body>
</html>