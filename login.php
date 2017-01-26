<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <link rel='stylesheet' href='font-awesome/css/font-awesome.min.css' />
    <style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);
    

    .login-page {
      width: 360px;
      padding: 8% 0 0;
      margin: auto;
    }
    .form {
      position: relative;
      z-index: 1;
      background: #FFFFFF;
      max-width: 100%;
      margin: 0 auto 100px;
      padding: 45px;
      text-align: center;
      box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
      opacity: 0.9;
    }
    
    .inputWrapper {
        position: relative;    
    }
    
    .inputWrapper .fa {
        position: absolute;
        top: 15px;
        left: 15px;
        color: #777777;
    }
    
    .form input {
      font-family: "Roboto", sans-serif;
      outline: 0;
      background: none;
      width: 100%;
      border: 0;
      border-bottom: 1px solid #A8A8A8;
      margin: 0 0 15px;
      padding: 15px 40px;
      box-sizing: border-box;
      font-size: 14px;
    }
    .form button {
      font-family: "Roboto", sans-serif;
      text-transform: uppercase;
      outline: 0;
      background: rgb(77,77,77);
      width: 100%;
      border: 0;
      padding: 15px;
      color: #FFFFFF;
      font-size: 14px;
      -webkit-transition: all 0.3 ease;
      transition: all 0.3 ease;
      cursor: pointer;
    }
    .form button:hover,.form button:active,.form button:focus {
      background: #43A047;
    }
    

    body {
      /*background: #76b852; 
      background: -webkit-linear-gradient(right, #76b852, #8DC26F);
      background: -moz-linear-gradient(right, #76b852, #8DC26F);
      background: -o-linear-gradient(right, #76b852, #8DC26F);
      background: linear-gradient(to left, #76b852, #8DC26F);*/
      font-family: "Roboto", sans-serif;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale; 
      
      background: url(background.jpg) no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      height: 100%;
    }
    .logo{
        height: 200px;
    }
    
    @media only screen 
        /* and (min-device-width : 375px) */
        and (max-device-width : 667px) 
        and (orientation : portrait) { 
            html{
                height: 100%;
                font-size: 200%;
            }
            
            .login-page{
                width: 80%;
                height: 100%;
                margin-left: 10%;
                margin-right: 10%;
                
            }
            
            .logo {
                height: 500px;
            }
            
            /*.form input {
                height: 100px;
                font-size: 150%;
            }*/
            
            .inputWrapper {
                font-size:1.5em ;
            }
            
            .inputWrapper input {
                font-size:100% ;
                padding: 15px 80px;
                
            }
            
            .login-button {
                height: 100px;
            }
            
            .login-button div {
                font-size: 250%;
            }
            
            .inputWrapper .fa {
                top: 20px;
            }
    }
    
    </style>
    
    <title>Expertify</title>
</head>

<body>

<div class="login-page">
  <div class="form" id="form-responsive">
    
    <img src="logo.png" class="logo" alt="Logo">
    <h1>Expertify Login</h1>
	<p>&copy; 2017 Expertify GmbH</p>
	  <?php
    
    
    if($_SESSION["wrong_pw"])
    {
     echo "<div style='color:#ff0000; '><b>Passwort falsch. <br>Bitte versuchen Sie es erneut!</b><br></div>";
     session_destroy(); 
    }
    
    ?>
    <form method="post" class="login-form" action="action.php">
        <div class='inputWrapper'>
            <i class='fa fa-user'></i>
	        <input type="text" placeholder="Benutzername" name="username" required>
        </div>
        <div class='inputWrapper'>
            <i class='fa fa-lock'></i>
	        <input type="password" placeholder="Passwort eingeben" name="mypassword" required>
        </div>
        <br>
      <button class="login-button"><div>Login</div></button>
    </form>
  </div>
</div>

</body>
</html>