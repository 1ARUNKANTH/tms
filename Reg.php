<?php
  require "db.php";

 if(isset($_POST['email'])){

    $Fname=$_POST['fname'];
    $Lname=$_POST['lname'];
    $Email=$_POST['email'];
    $Password=$_POST['password'];

    $md5Password=md5($Password);



    $sql="INSERT INTO users (FirstName,LastName,Email,Password) VALUES('".$Fname."','".$Lname."','".$Email."','". $md5Password."')";


    if(mysqli_query($conn,$sql)){
        echo "New Record Created Sucessfully";
      }
    }else{
        echo "Error";
    }
     mysqli_close($conn);
 

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reg</title>
</head>

<style>
  body {
     background-color:rgb(2, 10, 36);
     color:white;
      }
 form{
     border:1px solid white;
     width:300px;
     height:220px;
     margin-left:500px;
     margin-top:250px;

     }
     h2{
         text-align:center;
     }
</style>
<body>

  <form action="" method="POST" >
    <h2>Registration</h2>
    <table>
      <tr> 
        <td>Firt Name:</td>
        <td><input type="text" name="fname" required></td>
      </tr>

      <tr> 
        <td>Last Name:</td>
        <td><input type="text" name="lname" required></td>
      </tr>

      <tr> 
        <td>Email:</td>
        <td><input type="email" name="email" required></td>
      </tr>

      <tr> 
        <td>Password:</td>
        <td><input type="password" name="password" required></td>
      </tr>

      <tr> 
        <td><input type="button" value="Cancel"></td>

        <td><input type="submit" value="Submit"></td>
      </tr>
    </table>
    <?php
        echo "<a href ='login.php'>Back to Login Page</a>";
        ?>   
  </form>
  </body>
 
</html>