<?php session_start();
	include 'connection.php';
	//$pdo_auth = authenticate();
	$pdo = new PDO($dsn, $user, $pass, $opt); 

	//print_r($_REQUEST);
	//$data = json_encode($_REQUEST);
	//echo $data;

	$array = array();
	//$array = $array['$_REQUEST["rule_name"]'];
	
	

	$i=0;
	for($j=0;$j<count($_REQUEST['rule']);$j++){
		$ratay=array("trait"=>$_REQUEST['trait_name'][$j], "Ben"=>$_REQUEST['comparison'][$j], "value"=>$_REQUEST['value'][$j]);
		$array[$_REQUEST["rule_name"]]["comparison"][$j]["has"]=$ratay;
	}

	//print_r($array);
	$data = json_encode($array);
	echo "<pre>".$data."</pre>";

	// try {
 //          $stmt = $pdo->prepare('INSERT INTO `rule`(`rule`, `description`) VALUES ("'.$_REQUEST['rule_name'].'", "'.$_REQUEST['rule_desc'].'")');
 //      } catch(PDOException $ex) {
 //          echo "An Error occured!"; 
 //          print_r($ex->getMessage());
 //      }
 //      $stmt->execute();
 //     header('Location:view_rules.php?choice=success&value=Rule Added Successfully');
 //     exit();
	
?>