<?php

  $name=$_POST['name'];
  $email=$_POST["email"];
  $phone=$_POST["phone"];
  $message=$_POST["message"];

  $con=mysqli_connect("localhost","root","lucky","boo");
  
  if(mysqli_connect_errno()){
	  echo "failed connecting".mysqli_connect_errno();
  }
  
  $sql="insert into messages(name,email,phone,message)values('$name','$email','$phone','$message')";
  
  if(mysqli_query($con,$sql)) {
		echo "succcess";
  }

  else {
	  echo "errpr".mysql_error();
  }
 ?>
