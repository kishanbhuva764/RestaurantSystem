<?php
require('conn.php');

if(isset($_POST["uname"]) && isset($_POST["pass"])){

        $uname=$_POST["uname"];
        $pass=$_POST["pass"];
      
        $result=mysqli_query($conn,"SELECT * FROM tblstud1 WHERE uname = '{$uname}'");
        $r = mysqli_fetch_assoc($result);
        if(is_array($r) > 0){
            
            if($pass == $r["pass"]){
                $_SESSION["login"]=true;
                $_SESSION["id"]=$r["id"];
                header("Location : home.php");
            }else{
                echo 
                "<script> alert('Password does not match');</script>";
            }
           
        }else{
          
                echo 
                "<script> alert('User not registered');</script>";
            
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Login</h2>
    <form action="home.php" method="POST">
    <table>
         <tr>
            <td>
                <label for="uname">Username :</label>
            </td>
            <td>
                <input type="text" name="uname" id="uname" required value="">
            </td>
        </tr>
        <tr>
            <td>
            <label for="pass">Password :</label>
            </td>
            <td>
                <input type="password" name="pass" id="pass" required value="">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="Login">
            </td>
            
        </tr>
        </table>
        <tr>
            <td>
                <a href="registration.php">Register</a>
            </td>
            
        </tr>
    </form>
</body>
</html>