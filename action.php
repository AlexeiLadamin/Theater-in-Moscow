<?
	$name = $_GET['name'];
	$phone = $_GET['phone'];
	file_put_contents("data.txt", "{$name}|{$phone}");
?>

