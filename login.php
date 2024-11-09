<?php
session_start();
include('conn.php');

if(isset($_POST['sub'])){

$email=$_POST['email'];
$pass=$_POST['pass'];

$sql="SELECT * FROM `register` WHERE `r_email` = '$email' AND `r_pass` = '$pass'";
$result=mysqli_query($conn,$sql);
$row= mysqli_fetch_array($result);
if($row){
    $_SESSION['e']=$email;
    $_SESSION['name']=$row['r_name'];
    header('Location: index.php');
}
else{
    echo '<script>
alert("invalid");
</script>';
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
        
        <input type="email" name="email">
        <input type="password" name="pass">
        <input type="submit" name="sub" value="LOGIN">
    </form>
</body>
</html>