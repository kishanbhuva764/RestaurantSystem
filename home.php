<?php

require('conn.php');
if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result = mysqli_query($conn,"SELECT * FROM tblstud1 WHERE id = {$id}");
    $row = mysqli_fetch_array($result);
}else{
    header("Location : login.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
   <h1> Hello <?php echo $row["sname"]; ?></h1>
    <a href = "login.php">Login</a>
</body>
</html>