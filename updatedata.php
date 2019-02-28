<?php


$db = mysqli_connect("localhost", "root", "12345","registration");


if ($db === false) {
    die("Error: Could not connect." . mysqli_connect_error());

}

if (isset($_POST['update'])) {
        $id    = $_POST['id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $age = $_POST['age'];
        $company = $_POST['company'];
            
       

        $sql = "UPDATE trainee SET first_name = '$fname', last_name = '$lname', age = '$age', company = '$company' WHERE ID = '$id' ";
        $res = mysqli_query($db, $sql);
        
         
  
    
        
}

mysqli_close($db);

 ?>
<html>
<head>
<title>
    Update data    
</title>
<link rel="stylesheet" type="text/css" href="style.css">
    <body>

    <h1 style="margin-top: 30px ; font-size: 30px" >Update data</h1>
<a href="login.php"  style="margin-right: 10% ; margin-left: 10px "><input type="button" value="Sign out"></a>


<a href="newdata.php"><input type="button" value="New data"></a>
<a href="Mainportal.php"><input type="button" value="Main Portal  "></a>
<a href="updatedata.php"><input type="button" value="Update  "></a>
<a href="deletedata.php"><input type="button" value="Delete   "></a>



 <form class="form" action="updatedata.php" method="post" >
   
   <div class="data_entry">
      <p>ID</p>    
        <input type="text" name="id" placeholder="Enter ID" required>
        <p>First Name</p>    
        <input type="text" name="fname" placeholder="Enter First Name" required>
    <p>Last Name</p>
        <input type="text" name="lname" placeholder="Enter Last name" required>
     <p>age</p>
        <input type="text" name="age" placeholder="Enter Age" required>
     <p>Company</p>
        <input type="text" name="company" placeholder="Enter Company" required>
<br>
       <input type="submit" value="update" name="update">
        <br>
    </div>
        
        </form>


<div style="height: 73%; margin-top: -10px " class="tabs">  
<form>
<a href="http://healthbeyondboundaries.com/"><input type="button" value="Website"></a>
<br>
<br>
<p>Contact us at
    <br>
    <br>
    Simsglobaluae@gmail.com
    <br>
    <br>
    Phone number :9824375077
    <br>
    <br>
<a href="https://www.facebook.com/simsglobal/"><img src="logo-facebook.png"></a>
<br>
<a href="https://www.instagram.com/mgemawat/"><img src="photo-1.png"></a>
<br>
<a href="https://www.linkedin.com/in/manoharg/"><img src="c59b2807ea44f0d70f41ca73c61d281d-linkedin-icon-logo-by-vexels.png"></a>
    </p>
    
</form>
</div>
    
</body>
</head>
</html>