<?php session_start();
	include 'connection.php';
	$pdo = new PDO($dsn, $user, $pass, $opt); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Rule</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<?php include 'header.php';  ?>
	<div class="container" >
		<div style="padding: 20px;"></div>
		<h4>View Rules</h4><hr/>
		<table class="table table-striped" style="font-size: 13px;">
			<thead>
				<th>S.No.</th>
				<th>Rule Name</th>
				<th>Desc.</th>
				<th>Date</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php
				$i=1;
				try {
		              $stmt = $pdo->prepare('SELECT * FROM rule ORDER BY date DESC');
		              //echo 'SELECT * FROM franchisie_details WHERE email = :user';
		          } catch(PDOException $ex) {
		              echo "An Error occured!"; 
		              print_r($ex->getMessage());
		          }
		          $stmt->execute();
		          $user = $stmt->fetchAll();
		          foreach ($user as $key => $value) {
		          	echo '<tr>
							<td>'.$i.'</td>
							<td><b>'.$value['rule'].'</b></td>
							<td>'.$value['description'].'</td>
							<td>'.$value['date'].'</td>
							<td><a href="delete_rule.php?id='.$value['id'].'" class="btn btn-danger btn-sm">Delete</a></td>
						</tr>';
						$i++;
		          }
					
				?>
			</tbody>
		</table>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>