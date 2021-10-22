<?php
// get the data from the form
	$comments = filter_input (INPUT_POST, 'comments');
	$comments = htmlspecialchars ($comments);
	$comments = nl2br($comments, false);
	$date_default_timezone_set ('america/new_york');
	
	$host='localhost';
	$user='root';
	$pass='';
	$db='comments';

	$con=mysqli_connect($host,$user,$pass,$db);
	$sql="insert into comments ('username') VALUES ('comments');
	$query=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
	