<?php session_start();

require 'db.php';

if(!isset ($_SESSION['user'])){
    header("location:login.php");
}
echo "Welcome To Index.php Page";
echo"<br>";
echo "<a href ='logout.php'>Logout</a>";
echo"<br>";
echo "<a href ='addtask.php'>Add To Task</a>";

$sql=" SELECT * FROM task ";
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);

if($count>0){
    $table='<table border="1">
            <thead>
            <tr>
                <th>Id</th>
                <th>Task</th>
                <th>Description</th>
                <th>Assigned Date</th>
                <th>Delivery Date</th>
                <th>Status</th>
             </tr>
             </thead><body>';
while($row=mysqli_fetch_assoc($result)){
    $table.=  ' <tr>
                   <td>'.$row['id'].'</td>
                   <td>'.$row['Task'].'</td>
                   <td>'.$row['Description'].'</td>
                   <td>'.$row['AssignedDate'].'</td>
                   <td>'.$row['DeliveryDate'].'</td>
                   <td>'.$row['Status'].'</td>    
                   <td><a href="edittask.php?id='.$row['id'].'">Edit</a></td>     
                   <td><a href="deletetask.php?id='.$row['id'].'">Delete</a></td>       
               </tr>';
     } 
    $table.='</tbody></table>';
            echo $table;
      
             
}else{
    echo"No Recoard Found";
}          


?>