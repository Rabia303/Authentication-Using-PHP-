<?php
include('conn.php');

if(isset($_POST['sub'])){
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];

$sql="INSERT INTO `register`( `r_name`, `r_email`, `r_pass`) VALUES ('$name','$email','$pass')";
$result=mysqli_query($conn,$sql);
if($result){
// echo '<script>
// alert("Registered Successfully");
// </script>';
header("Location: login.php");
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
    <form method="post">
        <input type="text" name="name">
        <input type="email" name="email">
        <input type="password" name="pass">
        <input type="submit" name="sub" value="Register">
    </form>
    <a href="login.php">Already a member?</a>
</body>
</html>