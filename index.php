<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

 <title> Login </title>
 <link rel="stylesheet" type="text/css" href="style.css">
<body>
    <div class="loginbox">
        <div class="avatar">
            <img src="avatar.jpg" />
         <div class="form_login">   
           
     <form method="POST" id="form_login">
            <h1> Login Here </h1>
        <p>
            <input type="text" id="username" placeholder="Login" />
        </p>
        <p>
            <input type="password" id="password" placeholder="Password" />
        </p>
        <p>
            <button id="submitbutton" type="button" action = "login.php">Login</button>
        </p>
        <span class="container-invitation">Nie masz jeszcze konta? <a href="signup.php">Zarejestruj się</a></span>
    </form>

    </div>
  </div>      
 </div>


</body>
</head>
</html>