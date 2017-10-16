<?php
	
	if(isset($_POST['order'])){
		//step 1
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		//step 2
		// 3d file(filename)
		// engineering drawings
		$pickup=$_POST[''];
		$material=$_POST[''];
		$timeframe=$_POST[''];
		//step 3
		$material_type=$_POST[''];
		$finishing=$_POST[''];
		$certification=$_POST[''];
		$length=$_POST['length'];
		$width=$_POST['width'];
		$height=$_POST['height'];
		$quantity=$_POST['quantity'];
		$threaded_holes=$_POST['threaded_holes'];
		$faces=$_POST['faces'];
		$comment=$_POST['comment'];


		$to='nashid@zahncenternyc.com'; //Recipient 
		$subject='New Quote Request';
		$message="Name: ".$name."\n".
				"Email: " .$email. "\n".
				"Phone Number: ".$phone. "\n".
				"Part length (mm): ".$length. "\n".
				"Part width (mm): ".$width. "\n".
				"Part Height (mm): ".$height. "\n".
				"Quantity: ".$quantity. "\n".
				"Threaded Holes: ".$threaded_holes. "\n".
				"Faces to be machined:: ".$faces. "\n".
				"Special Requests/Additional Comments: ".$comment;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Your Quote was placed successfully! Thank you".", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
			header("Location:service.html");
		}
	}
?>