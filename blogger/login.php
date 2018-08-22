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
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


else{

$sql="SELECT * FROM contact WHERE PASSWORD='".$_POST["userpass"]."' AND email='".$_POST["useremail"]."'";

$result=$conn->query($sql);

//$result=mysqli_query($conn,$sql);

if ($result->num_rows>0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<h1>welcome</h1> " . $row["name"];
    }
} else {
    echo "0 results";
}
}

$conn->close();
?> 
	
Welcome <?php echo $_POST["useremail"]; ?>

</body>
</html>
