<?php 

$db = mysqli_connect("localhost", "root", "12345","registration");


if ($db === false) {
    die("Error: Could not connect." . mysqli_connect_error());

}

if (isset($_POST['login'])) {
    
     $user = $_POST['user'];
        $pass = $_POST['pass'];
        $query = mysqli_query($db,"SELECT * FROM users WHERE  username = '$user' and password = '$pass' ") or die ("Failed to query database". mysqli_error());
        $row = mysqli_fetch_array($query);
        
        if ($row['username'] == $user  && $row['password'] == $pass) {
          
           header('location: Mainportal.php');
        }else {
        
        header('location: Signup.php');
        
        }

                 
}

mysqli_close($db);

?>
<html>
<head>
 <title>SIMS Global</title>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
    <div class="loginbox">
    <img src="SIMS%20Logo.jpg" class="logo">
    <h1>Login</h1>
   <form class="form" method="post" action="login.php">
    <p>Username</p>    
        <input type="text" name="user" placeholder="Enter Username" required>
    <p>Password</p>
        <input type="password" name="pass" placeholder="Enter Password" required>
        <input type="submit" value="login" name="login" >
        <br>
        
        <a href="Signup.php">Sign Up</a>
    </form> 
    </div>
</body>
</head>
</html>