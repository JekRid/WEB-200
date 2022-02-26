<?php
if (isset($_POST["Send"])){
        $user=$_POST["User"];
        $pass=$_POST["Pass"];

        if(strcmp($user, "Admin") == 0 and strcmp($pass, "***********") == 0){
                header("refresh: 0.001; url = 12654132asd4r56q1fqr456f1aqf4q5jsdafafkashfasjkfsadfhasfjashj6fqf4q56fa1gf56w7t4eq56.php>                exit;
        }
        else{
                echo "Введен неверный логин или пароль";
        }
}


?>




<html>

<head>
<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
<div class="login-page">
  <div class="form">
    <form class="login-form"  method="POST">
      <input type="text" placeholder="username" name="User"/>
      <input type="password" placeholder="password" name="Pass"/>
      <input type="submit" placeholder="Отправить" name="Send"/>
    </form>
  </div>
</div>
</body>
</html>