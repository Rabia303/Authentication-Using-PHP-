<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
    <?php
session_start();
if(!isset($_SESSION['name'])){
echo '<a href="login.php">LOGIN</a>';
echo '<a href="register.php">REGISTER</a>';
}
else{
    echo $_SESSION['name'];
echo '<a href="logout.php">LOGOUT</a>';

}

?>
    
    
    
</body>
</html>