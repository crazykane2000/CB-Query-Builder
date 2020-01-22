<?php session_start();
	include 'connection.php';
	$pdo = new PDO($dsn, $user, $pass, $opt); 
?><!DOCTYPE html>
<html>
<head>
	<title>Add Criterian</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<?php include 'header.php';  ?>
	<div class="container" >
		<div style="padding: 20px;"></div>
		<h4>Create Criteria </h4><hr/>
		<form action="make_query_handle.php" method="POST">
			<div class="row">
				<div class="col-lg-12">
					<div class="form-group">
						<label>Select Rule </label>
						<select name="rule_name" class="form-control"  required="">
							<?php
								try {
					            $stmt = $pdo->prepare('SELECT * FROM `rule` ORDER BY date DESC');

					            } catch(PDOException $ex) {
					                echo "An Error occured!"; 
					                print_r($ex->getMessage());
					            }
					            $stmt->execute();
					            $user = $stmt->fetchAll();
					            print_r($user);
					            foreach ($user as $key => $value) {
					            	echo '<option>'.$value['rule'].'</option>';
					            }
							 ?>
						</select>
					</div>
				</div>

				<div class="col-lg-3">
					<div class="form-group">
						<label>Rule </label>
						<select name="rule[]" class="form-control"  required="">
							<option>has</option>
							<option>has</option>
						</select>
					</div>
				</div>

				<div class="col-lg-3">
					<div class="form-group">
						<label>Enter the Trait </label>
						<input type="text" name="trait_name[]" class="form-control" placeholder="Enter trait Name" required="">
					</div>
				</div>

				<div class="col-lg-3">
					<div class="form-group">
						<label>Comparison </label>
						<select name="comparison[]" class="form-control"  required="">
							<option>below</option>
							<option>above</option>
						</select>
					</div>
				</div>

				<div class="col-lg-3">
					<div class="form-group">
						<label>Enter Value </label>
						<input type="text" name="value[]" class="form-control" placeholder="Enter Value Data" required="">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<button class="btn btn-success btn-sm" type="submit">Build  Rule</button>
				</div>
			</div>
		</form>

		
	</div>

	<div class="container">
		
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>