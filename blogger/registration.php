<!DOCTYPE html>
<html>
<head>
	<title>
		Welcome
	</title>
</head>
<body>
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="userinfo";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}
else{
$sql="INSERT INTO contact ( Regno , name , email , profilepic , password ) VALUES ('".$_GET["regno"]."','".$_GET["username"]."','".$_GET["user_email"]."','".$_GET["userprofile"]."','".$_GET["userpass"]."')";
if(mysqli_query($conn,$sql))
{
echo "user successfully";
}
else
{
echo "error in creating user";
}
}
mysqli_close($conn);
?> 
	
Welcome <?php echo $_GET["username"]; ?>

</body>
</html>
