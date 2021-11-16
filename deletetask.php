<?php session_start();

require 'db.php';

if(!isset ($_SESSION['user'])){
    header("location:login.php");
}
$id=$_GET['id'];

$sql="DELETE FROM task WHERE id ='$id'";
if(mysqli_query($conn,$sql)){
    header("location:index.php");
}else{
    echo"Error Deleting Record :".mysqli_erroer($conn);
}
mysqli_close($conn);

?>