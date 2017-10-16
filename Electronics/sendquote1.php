<?php 
	
		
	
		
	session_start();	
		
		
// 	if(isset($_POST['next1'])){
// 		//echo '<a href="design.html"></a>';
// 		//step 1
		
// 		$_SESSION['name']= $_POST['name'];
// 		$_SESSION['email']= $_POST['email'];
// 		$_SESSION['phone']= $_POST['phone'];

// 		$name=$_SESSION['name'];
// 		$email=$_SESSION['email'];
// 		$phone=$_SESSION['phone'];
		
		
		
// 		echo $name. "\n". $phone;
// 		// header('Location: design.html');

// 		// exit();

		 
// }		 


	// if(isset($_POST['next2'])){
		
	
	// 	echo $name. "\n". $phone;
		
	// 	//step 2
	// 	// 3d file(filename)
	// 	// engineering drawings
	// 	$pickup=$_POST[''];
	// 	$material=$_POST[''];
	// 	$timeframe=$_POST[''];
	// 	//header('Location: manufacturing.html');

	// 	//exit();
	// }

		if(isset($_POST['order'])){

	
		// $_SESSION['length']=$_POST['length'];
		// $_SESSION['width']=$_POST['width'];
		// $_SESSION['height']=$_POST['height'];
		// $_SESSION['quantity']=$_POST['quantity'];
		// $_SESSION['threaded_holes']=$_POST['threaded_holes'];
		// $_SESSION['faces']=$_POST['faces'];
		// $_SESSION['comment']=$_POST['comment'];

			//step 3
		// $material_type=$_POST[''];
		// $finishing=$_POST[''];
		// $certification=$_POST[''];
		// $length=$_SESSION['length'];
		// $width=$$_SESSION['width'];
		// $height=$_SESSION['height'];
		// $quantity=$_POST['quantity'];
		// $threaded_holes=$_SESSION['threaded_holes'];
		// $faces=$_SESSION['faces'];
		// $comment=$_SESSION['comment'];



		$_SESSION['fname']= $_POST['fname'];
		$_SESSION['lname']= $_POST['lname'];
		$_SESSION['email']= $_POST['email'];
		$_SESSION['phone']= $_POST['phone'];
		$_SESSION['comment']= $_POST['comment'];

		$fname=$_SESSION['fname'];
		$lname=$_SESSION['lname'];
		$email=$_SESSION['email'];
		$phone=$_SESSION['phone'];
		
		$comment=$_SESSION['comment'];



		$from=$email;
		$to='prototyping@zahncenternyc.com '; //Recipient 
		$subject='New Quote Request';
		$message="First Name: ".$fname."\n".
				"Last Name: ".$lname."\n".
				"Email: " .$email. "\n".
				"Phone Number: ".$phone. "\n".
				
				"Project Description: ".$comment;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			// echo $name. "\n". $phone. "\n" .$comment;
			//echo "<h1>Your Quote was placed successfully! Thank you".", We will contact you shortly!</h1>";
			//sleep(5);
			header('Location: thanks.html');

		//exit();
		}
		// else{
		// 	echo "Something went wrong!";
		// 	header("Location:service.html");
		// }
		
	}
?>