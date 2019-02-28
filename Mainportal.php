
<html>
<head>
<title>
    Main Portal    
</title>
<link rel="stylesheet" type="text/css" href="style.css">
    <body>
                
    <h1 style="margin-top: 30px ; font-size: 30px" >Main Portal</h1>
<a href="login.php"><input type="button" value="Sign out" style="margin-right: 10% ; margin-left: 10px"></a>


<a href="newdata.php"><input type="button" value="New data"></a>
<a href="Mainportal.php"><input type="button" value="Main Portal"></a>
<a href="updatedata.php"><input type="button" value="Update   "></a>
<a href="deletedata.php"><input type="button" value="Delete   "></a>

<div class="scroll">
<div class="db">
<?php 


$db = mysqli_connect("localhost", "root", "12345","registration");


if ($db === false) {
    die("Error: Could not connect." . mysqli_connect_error());

}
    
   
$sql = "SELECT * FROM trainee ";
$res = mysqli_query($db, $sql);

echo "<table>";
echo "<tr>
<th>ID</th><th>First_Name</th><th>Last_Name</th><th>age</th><th>Company</th></tr>";
 


while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {

echo "<tr><td>";
echo  $row['ID'] ; 
echo "</td><td>";
echo  $row['first_name'];
echo "</td><td>";
echo  $row['last_name'];    
echo "</td><td>";
echo  $row['age'];    
echo "</td><td>";
echo  $row['company']; 
echo "</td></tr>";   
}
echo "</table>";

mysqli_close($db);

?>
</div>
</div>

<div class="tabs">  
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