<?php session_start();
	include 'connection.php';
	//$pdo_auth = authenticate();
	$pdo = new PDO($dsn, $user, $pass, $opt); 
	
	try {
          $stmt = $pdo->prepare('INSERT INTO `rule`(`rule`, `description`) VALUES ("'.$_REQUEST['rule_name'].'", "'.$_REQUEST['rule_desc'].'")');
      } catch(PDOException $ex) {
          echo "An Error occured!"; 
          print_r($ex->getMessage());
      }
      $stmt->execute();
     header('Location:view_rules.php?choice=success&value=Rule Added Successfully');
     exit();
	
?>