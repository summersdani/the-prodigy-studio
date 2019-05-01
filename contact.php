<?php 

if(isset($_POST['submit'])) {
        
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$address = $_POST['address'];
$postalcode = $_POST['pcode'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$mail_to = 'danibsummers@gmail.com';
$subject = 'Message from a website visitor '.$fname;

	$server = mysqli_connect('localhost', 'root', 'root', 'wordpress') or die("The Server Cannot Be Reached at this Time!");
	//$dbc = mysqli_select_db($server, 'newsletter') or die("There is a problem accessing the databse!");

	$query = mysqli_query($server, "INSERT INTO subscribers (fname, lname, email) VALUES('$fname','$lname','$email')");

	$name = strip_tags($name);
	$email = strip_tags($email);

	if(empty($fname) || empty($lname) || empty($email) || empty($address) || empty($pcode) || empty($phone)) {

			echo "All Fields Must Be Filled In!";

		} else {

			echo "Your message has been sent";

			}

}

mysqli_close($server);

?>