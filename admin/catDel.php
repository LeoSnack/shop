<?php
	require($_SERVER['DOCUMENT_ROOT']."/backend/db.php");
	require($_SERVER['DOCUMENT_ROOT']."/backend/function.php");

	$id = getUrlQuery($_SERVER['REQUEST_URI'], 'id');

	$query ="DELETE FROM cat WHERE id='$id'";
	$result_sql = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
	mysqli_close($link);
	header("location: /admin/index.php");
?>