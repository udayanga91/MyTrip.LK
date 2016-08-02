<?php
if(!isset($_SESSION[''])){
	session_start();
}
include_once('../ssi/db.php');
if(isset($_POST['btn'])){
	$name = mysqli_real_escape_string($con,htmlspecialchars($_POST['name']));
	$email = mysqli_real_escape_string($con,htmlspecialchars($_POST['email']));
	$address = mysqli_real_escape_string($con,htmlspecialchars($_POST['address']));
	$contact = mysqli_real_escape_string($con,htmlspecialchars($_POST['contact']));
	$lon = mysqli_real_escape_string($con,htmlspecialchars($_POST['lon']));
	$lat = mysqli_real_escape_string($con,htmlspecialchars($_POST['lat']));
	$pwd = mysqli_real_escape_string($con,htmlspecialchars($_POST['password']));
	$area = mysqli_real_escape_string($con,htmlspecialchars($_POST['area']));
	$result = mysqli_query($con,"SELECT MAX(restaurant_id) as count FROM restaurant");
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_array($result)){
			$restID = $row['count'];
		}
	}
	$value = split('R-',$restID);
	$num = $value[1] + 1;
	$restId = 'R-'.$num;
	$query = "INSERT INTO restaurant VALUES ('".$restId."','".$name."','".$contact."','".$address."','".$lat."','".$lon."','".$email."','".$area."')";
	$query2 = "INSERT INTO user VALUES ('".$email."','".$pwd."','restaurant')";
	if(mysqli_query($con, $query) && mysqli_query($con, $query2)){
		$_SESSION['email'] = $email;
		$_SESSION['type'] = "restaurant";
		header('Location:../profile-page.php');
	} else {
		echo mysqli_error($con);	
	}
}
?>