<?php
require_once("config.php");
$sql = "SELECT * FROM users WHERE id = 1";
$exec = mysqli_query($conn, $sql);
$res = mysqli_fetch_assoc($exec);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PAYMENT</title>
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
<body background="toll2.jpg" style="background-size:cover">
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 well well-sm col-md-push-4">
            <legend><a href="javascript:;"><i class="glyphicon glyphicon-globe"></i></a> PAYMENT!</legend>
               <form action="PayUMoney_form.php" method="POST">
		<input type="hidden" name="firstname" value="<?php echo $res['display_name']; ?>" />
		<input type="hidden" name="email" value="<?php echo $res['email']; ?>" />
		<input type="hidden" name="phone" value="<?php echo $res['mobile']; ?>" />
		<input type="hidden" name="productinfo" value="Toll payment" />
		<input type="hidden" name="surl" value="http://localhost/tollgate/success.php" />
		<input type="hidden" name="furl" value="http://localhost/tollgate/failure%20(1).php" />
	
		<label>Amount to Pay: </label>
		<input type="text" name="amount" value="150" />
		<button type="submit" class="btn btn-lg btn-primary btn-block">Pay</button>
				</form>
				</div>
    </div>
</div>
</body>
</html>