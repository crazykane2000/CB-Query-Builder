<!DOCTYPE html>
<html>
<head>
	<title>Add Rule</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<?php include 'header.php';  ?>
	<div class="container" >
		<div style="padding: 20px;"></div>
		<h4>Create New Rule</h4><hr/>
		<form action="make_rule_handle.php" method="POST">
			<div class="form-group">
				<label>Enter the Name of Rule </label>
				<input type="text" name="rule_name" class="form-control" placeholder="Enter Rule Name" required="">
			</div>

			<div class="form-group">
				<label>Rule Description </label>
				<input type="text" name="rule_desc" class="form-control" placeholder="Enter Rule Description" required="">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-success">Create Rule</button>
			</div>


		</form>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>