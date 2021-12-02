<?php session_start();
 require "db.php";

     if(isset($_POST['email'])){
       $Email=$_POST['email'];
       $Password=md5($_POST['password']);


       $sql= "SELECT * FROM users WHERE Email='$Email' AND Password ='$Password'";

       $result=mysqli_query($conn,$sql);

       $count=mysqli_num_rows($result);

       if($count>0){
           $row=mysqli_fetch_row($result);

           $_SESSION['user']=$row['2'];

            header("location:index.php");
       }else{
           $msg= "Invaild Email or Password";
       }

   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<style>

body {
     background-color:rgb(2, 10, 36);
     color:white;
      }

 form{
     border:1px solid white;
     width:300px;
     height:200px;
     margin-left:500px;
     margin-top:250px;

     }
     h2{
         text-align:center;
     }

</style>
<body>

  <form action="" method="POST"> 
    <h2>Login</h2>
    <table>
        
      <tr> 
        <td>Email :</td>
        <td><input type="email" name="email" required></td>
      </tr>

      <tr> 
        <td>Password :</td>
        <td><input type="password" name="password" required></td>
      </tr>

      <tr> 
         <td><input type="reset" value="Reset"></td>
        <td><input type="submit" value="Login"></td>
      </tr>
    </table>
    <?php
        echo "<a href ='Reg.php'>Register</a>";
        ?>   
  </form>
       <?php
         if(isset($msg)){
             echo "$msg";
         }
       ?>
</body>
</html>