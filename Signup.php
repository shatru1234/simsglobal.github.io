<?php


$db = mysqli_connect("localhost", "root", "12345","registration");


if ($db === false) {
    die("Error: Could not connect." . mysqli_connect_error());

}

if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];

    if ($password == $password2) {
        
       

        $sql = "INSERT INTO users( username, password) VALUES ('$username', '$password')";
        $res = mysqli_query($db, $sql);
        
         echo "you have successfully registered, now you can login.";
         
    }else {
        echo "The two passwords do not match";
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
    <form class="form" action="Signup.php" method="post" >
   
   <div class="input">
        <p>Username</p>    
        <input type="text" name="username" placeholder="Enter Username" required>
    <p>Password</p>
        <input type="password" name="password" placeholder="Enter Password" required>
     <p>Confirm Password</p>
        <input type="password" name="password2" placeholder="Enter Password" required>
       
       <input type="submit" value="register" name="register">
        <br>
    </div>
        <a href="login.php">Login</a>
        
        </form>
    </div>
</body>
</head>

</html>