<?php
	session_start();
	if(!isset($_SESSION['userpw']))
	{			
		header("location:http://expertify.grni.ch/login.php");  
	}
?>
<html>
<body>
<style>
.logout_btn{
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	margin: 20px;
}
.logout_btn:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
<div style="border: 1px solid; margin: 10px; padding: 10px; text-align: center; font-family: sans-serif;">

<?php
	if(isset($_SESSION['userpw']))
	{
		$user = $_SESSION['username'];
		$pw = $_SESSION['userpw'];
		echo "<p class='username'><b>Willkommen </b><br>$user!</p>";
		echo "<p class='password'>Eingegebenes Passwort: <br>$pw</p>";
		echo "Dies ist eine Testseite und gehoert zu den Uebungen des Moduls 151.";
		echo "<br><a class='logout_btn' href='http://m151.grni.ch/logout.php'>Logout</a>";
	}
?>
	
</div>
<img src="http://nationalwintergames.ch/wp-content/uploads/sites/7/2016/01/GBC_weiss.jpg" style="margin: 20px;">
</body>
<footer><div style="position:absolute; bottom: 0; width: 98%; text-align: center;margin-bottom: 10px;">
&copy; 2016 Nicola Gr&uuml;nenfelder
</div>
¨</footer>
</html>
