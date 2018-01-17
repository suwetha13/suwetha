<?php
require_once "config.php";
if(isset($_POST['continue'])){
	$post = $_POST;
	$sql = "INSERT INTO 'transaction table' (customer_id, fromplace, toplace, tollgate_id, amount, trip_type, mode_of_pay) VALUES('{$post['customerid']}','{$post['from']}','{$post['to']}','{$post['tollgateid']}','{$post['amt']}','{$post['triptype']}','{$post['typeofpay']}')";
	$exec = mysqli_query($conn, $sql);
	//$rc = mysqli_num_rows($exec);
	//$res = mysqli_fetch_assoc($exec);
	header("Location: paymentmy.php");
	//if($exec == 1){
		//header("Location: paymentmy.php");
	//}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>TRANSACTION FORM</title>
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
<body background="toll6.jpg" style="background-size:cover">
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 well well-sm col-md-push-4">
            <legend><a href="javascript:;"><i class="glyphicon glyphicon-globe"></i></a> TRANSACTION FORM!</legend>
            <form action="paymentmy.php" method="post" class="form" role="form">
				<input class="form-control" name="customerid" placeholder="CUSOMER ID" type="text"/>
							 		
				<input class="form-control" name="from" placeholder="FROM PLACE" type="text" />
				<input class="form-control" name="to" placeholder="TO PLACE" type="text" />	
				<input class="form-control" name="tollgateid" placeholder="TOLLGATE ID" type="text" />
				<select class="form-control" name="triptype">
					<option value=""> TRIP TYPE</option>
					<option value=""> SINGLE</option>
					<option value=""> DOUBLE</option>
				</select>
				<input class="form-control" name="amt" placeholder="AMOUNT" type="text" />
				<select class="form-control"name="typeofpay">
					<option value=""> TYPE OF PAY</option>
					<option value=""> CREDIT CARD</option>
					<option value=""> DEBIT CARD</option>
					<option value=""> NET BANKING</option>
				</select>
				
			
				<button class="btn btn-lg btn-primary btn-block" name="continue" type="submit">PAY</button>
			   				<script>
		
		function pay()
		{
		//alert(9);
			//window.location.href="PayUmoneyform.php";
		}
		
		function reset()
		{
		//alert(9);
			//window.location.href="fr7.php";
		}
		
		</script>
            </form>
        </div>
    </div>
</div>
</body>
</html>