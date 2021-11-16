<?php
$Servername ="localhost";
$Username ="root";
$Password="";
$database="tms";

$conn=mysqli_connect($Servername,$Username,$Password,$database);

if(!$conn){
    die("Connection Failed : ".mysqli_connect_error());

}else{

    echo"Connected Sucessfully";
}
?>