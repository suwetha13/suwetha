<?php
require_once "config.php";
$error = "";
if(isset($_POST['register'])){
	$post = $_POST;
	$sql = "INSERT INTO users (username, password, display_name, mobile, email, tollgateid, cabinno) VALUES('{$post['username']}','{$post['pwsd']}','{$post['name']}','{$post['phno']}','{$post['youremail']}','{$post['tollgateid']}','{$post['cabinno']}')";
	$res = mysqli_query($conn, $sql);
	      header("Location: index.php");
	if($res){
				} else{
		$error = "Unable to Register.";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>REGISTRATION FORM</title>
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
<body background="toll3.jpg" style="background-size:cover">
 <p><?php echo $error; ?></p> 
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 well well-sm col-md-push-4">
            <legend><a href="javascript:;"><i class="glyphicon glyphicon-globe"></i></a> Sign up!</legend>
            <form action="" method="post" class="form" role="form">		
				<input class="form-control" name="name" placeholder="Name" required type="text" />
										
				<input class="form-control" name="username" placeholder="USER NAME" type="text" />
				<input class="form-control" name="youremail" placeholder="Your Email" type="email" />
				<input class="form-control" name="phno" placeholder="PHONE NO" type="text" />
				<input class="form-control" name="pwsd" placeholder="PASSWORD" type="password" />
				<input class="form-control" name="reenterpswd" placeholder="RE-ENTER PASSWORD" type="password" />
				<input class="form-control" name="tollgateid" placeholder="TOLLGATE ID" type="text" />
				<input class="form-control" name="cabinno" placeholder="CABIN NO" type="text" />
				<button class="btn btn-lg btn-primary btn-block" onclick="sign()" name="register" type="submit">SIGN UP</button>
				<script>
					function sign()
					{
						//alert(9);
						//window.location.href="fr1.php";
					}
		        </script>

            </form>
        </div>
    </div>
</div>
</body>
</html>