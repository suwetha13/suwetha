<?php
require_once "config.php";
if(isset($_POST['login'])){
	$post = $_POST;
	$sql = "SELECT * FROM users WHERE username = '{$post['username']}' AND password = '{$post['pwsd']}'";
	$exec = mysqli_query($conn, $sql);
	$rc = mysqli_num_rows($exec);
	//$res = mysqli_fetch_assoc($exec);
	if($rc == 1){
		header("Location: fr7.php");
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>LOGIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <style>
  body { padding-top:30px; }
.form-control { margin-bottom: 10px; }
  </style>
</head>
<body background="toll.jpg" style="background-size:cover">
<div class="container">
    <div class="row" style="    margin-top: 100px;">
	     <div class="col-xs-12 col-sm-12 col-md-4 well well-sm col-md-push-4">
            <legend><a href="javascript:;"><i class="glyphicon glyphicon-globe"></i></a> Login!</legend>
            <form action="" method="post" class="form" role="form">
				<input class="form-control" name="username" placeholder="USER NAME" type="text" />
				<input class="form-control" name="pwsd" placeholder="PASSWORD" type="password" />
				<button class="btn btn-lg btn-primary btn-block" name="login" onclick="login()" type="submit">LOGIN</button>
				<a href ="register.php" >NEW USER </a>
            </form>
        </div>
		<script>
		
		function login()
		{
		//alert(9);
			//window.location.href="fr4.php";
		}
		
		</script>
    </div>
</div>
</body>
</html>