<?php
    $conn=mysqli_connect("localhost","root","","oddhayon");
	$name=$_POST['fname'];
	$email=$_POST['email'];
	$organization=$_POST['organization'];
	$pass=$_POST['pass'];
	$bdate=$_POST['bdate'];
	$gender=$_POST['gender'];
	$payment=$_POST['payment'];
	$number=$_POST['number'];
	$term=$_POST['term'];
	$sql="INSERT INTO `registration`(`Name`, `Email`, `Organization`, `Password`, `B_Date`, `Gender`, `Payment`, `C_Number`, `R_Date`,`Terms`)
	VALUES ('$name','$email','$organization','$pass','$bdate','$gender','$payment','$number',CURRENT_TIMESTAMP,'$term')";
	if(mysqli_query($conn,$sql)){
	echo "<script>alert('Successfully register your account');location.href='registration.php'</script>";
}
else{
	echo "<script>alert('There is an error to access database');location.href='registration.php'</script>";
}
?>