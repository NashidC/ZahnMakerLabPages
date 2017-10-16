<?php
	
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$msg=$_POST['msg'];
		$sub=$_POST['sub'];

		$to='prototyping@zahncenternyc.com'; //Recipient 
		$subject='Contact Form';
		$message="Name: ".$name."\n"."Subject: " .$sub. "\n"."Message: ".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you".", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
			//header("Location:index.html")
		}
	}
?>