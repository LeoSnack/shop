<?php
session_start();
require("db.php");

	if(!empty($_POST["NameT"]) && !empty($_POST["CatT"]) && !empty($_POST["LinkT"]) && !empty($_POST["PriceT"])){

		$NameT = trim($_POST["NameT"]);
		$CatT = trim($_POST["CatT"]);
		$LinkT = trim($_POST["LinkT"]);
		$PriceT = trim($_POST["PriceT"]);

		$query ="INSERT INTO tovar(name, link, price, cat) VALUES('$NameT', '$CatT', '$LinkT', '$PriceT')";
			
		    $result_sql = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
		    $result = array(
		    	'res' => "true"
				);

		echo json_encode($result);
		exit;
	}

	if(!empty($_POST["name"]) && !empty($_POST["link"])){

		$NameT = trim($_POST["name"]);
		$CatT = trim($_POST["link"]);

		$query ="INSERT INTO cat(name, link) VALUES('$NameT', '$CatT')";
			
		    $result_sql = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
		    $result = array(
		    	'res' => "true"
				);

		echo json_encode($result);
		exit;
	}

	else{
		$result = array(
	    	'error' => "noData"
		);
	}

	echo json_encode($result);
	mysqli_close($link);
?>