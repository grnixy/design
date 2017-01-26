<?php
session_start(); 

if(isset($_POST['mypassword'])) {

$host="grni.ch.mysql:3306"; // Host name 
$username="grni_ch@10.27.18.48"; // Mysql username 
$password="EJn6gW7z"; // Mysql password 
$db_name="grni_ch"; // Database name 
$tbl_name="m151"; // Table name 

// Connect to server and select databse.
$con = mysqli_connect("grni.ch.mysql","grni_ch","EJn6gW7z","grni_ch");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$myuser=$_POST['username'];  

$mypassword=$_POST['mypassword']; 
//echo $mypassword;

$sql="SELECT * FROM $tbl_name WHERE password='$mypassword'";

$result=mysqli_query($con,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $mypassword, table row must be 1 row
if($count==1){
	
	$_SESSION["username"] = $myuser;
	$row = $result->fetch_assoc(); 
	$userpw = $row["password"];        
	$_SESSION["userpw"] = $userpw; 
	header("location:http://m151.grni.ch");      
}

else {
	//Wrong Password
	$_SESSION["wrong_pw"] = 1; 
	header("location:http://m151.grni.ch/login.php");
}

}//close isset

else{
    // if username and password are not in $_POST do something else
    echo 'No username or password supplied!';
    // redirect to login page
    header("location:http://m151.grni.ch/login.php");
}
mysqli_close($con);

?>