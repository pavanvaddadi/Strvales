<?php
	session_start();
	$host="localhost";
	$dbuser="root";
	$pass="";
	$dbname="stravels_db";
	$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
	if(mysqli_connect_errno())
	{
	 die("connection failed".mysqli_connect_error());
	}

	$username=$_POST['UserID'];
	$password=$_POST['Password'];
	$sql="SELECT * FROM `admin` WHERE `username` = '$username'";
	$res=mysqli_query($conn,$sql);
	if(!$res)
	{
		header("Location: index.php?msg=You are not registered yet");
	}
	else
	{
		$row=mysqli_fetch_assoc($res);
		if($row['password']==$password)
		{
			$_SESSION['username']=$username;
			header("Location: carsList/cars_list.php");
		}
		else
		{
			header("Location: index.php?msg=Invalid username or password");
		}
	}
?>
