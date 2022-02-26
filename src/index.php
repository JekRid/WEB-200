<?php
if (isset($_POST["Send"])){
    $user=$_POST["User"];
	$pass=$_POST["Pass"];
	if(!$user == "Admin" and $pass == "ZVDCTF{S3CREt_pA$SwOrD_FR0m_the_$upERU53r_1n_7hE_lOgS}"){
			header("refresh: 0.001; url = 12654132asd4r56q1fqr456f1aqf4q56fqf4q56fa1gf56w7t4eq56.php");
		}
	}
	else{
		echo "Не введен логин или пароль";
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