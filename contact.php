<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$msg=$_POST['message'];

		$to='skdharaneeshwar@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='New Form Submission';
		$message="Name :".$name."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			header("Location: emailsent.html");;
		}
		else{
			header("Location: error/404.html");
		}
	}
?>