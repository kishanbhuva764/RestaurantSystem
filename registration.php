<?php
require('conn.php');

if(isset($_POST["sid"]) && isset($_POST["sname"]) && isset($_POST["uname"]) && isset($_POST["email"]) && isset($_POST["pass"])){

        $sid=$_POST["sid"];
        $sname=$_POST["sname"];
        $uname=$_POST["uname"];
        $email=$_POST["email"];
        $pass=$_POST["pass"];
        $cpass=$_POST["cpass"];

        $query="SELECT * FROM tblstud1 WHERE uname = '{$uname}' OR email = '{$email}'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result) > 0){
            echo 
            "<script> alert('Username or email Has Already Taken');</script>";
        }else{
            if($pass == $cpass){
                $query = "INSERT INTO tblstud1 VALUES('',{$sid},'{$sname}','{$uname}','{$email}','{$pass}')";
                mysqli_query($conn,$query);
                echo 
                    "<script> alert('Registration Successful');</script>";
            }else{
                echo 
                "<script> alert('Password Does not match');</script>";
            }
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
<form action="" method="POST">
<h3>Registration</h3>
<table>
        <tr>
            <td>
                <label for="sid">Sid :</label>
            </td>
            <td>
                <input type="text" name="sid" id="sid" required value="">
            </td>
        </tr>
        <tr>
            <td>
            <label for="sname">Name :</label>
            </td>
            <td>
                <input type="text" name="sname" id="sname" required value="">
            </td>
        </tr>
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
            <label for="email">E-mail :</label>

            </td>
            <td>
                <input type="text" name="email" id="email" required value="">
            </td>
        </tr>
        <tr>
        <tr>
            <td>
            <label for="pass">Password :</label>

            </td>
            <td>
                <input type="password" name="pass" id="pass" required value="">
            </td>
        </tr>
        <tr>
        <tr>
            <td>
            <label for="cpass">Conform password :</label>

            </td>
            <td>
                <input type="password" name="cpass" id="cpass" required value="">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" text="Register">
            </td>
            
        </tr>
        <tr>
            <td>
                <a href="login.php">Login</a>
            </td>
            
        </tr>
    </table>
</form>
</body>
</html>