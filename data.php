<?php
	
	$sr = $_POST['sr'];
	$name = $_POST['name'];
	$age = $_POST['age'];

	$conn = mysqli_connect("localhost","root","","dev");
	if($conn){
		$sql = "insert into mytable values ('$sr','$name','$age');";
		$r = mysqli_query($conn,$sql);
		if($r){
			echo "success";
		}
		else{
			echo "Not  success";
		}
	} else{
		echo "can't connect";
	}
	mysqli_close($conn);



?>