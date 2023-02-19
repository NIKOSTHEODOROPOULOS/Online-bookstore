<?php

session_start();

$numberbook1=$_SESSION["ΑΝΤΙΤΥΠΑ1"];
$numberbook2=$_SESSION["ΑΝΤΙΤΥΠΑ2"];
$numberbook3=$_SESSION["ΑΝΤΙΤΥΠΑ3"];
$numberbook4=$_SESSION["ΑΝΤΙΤΥΠΑ4"];
$numberbook5=$_SESSION["ΑΝΤΙΤΥΠΑ5"];

$bookname1=$_SESSION["ΒΙΒΛΙΟ1"];
$bookname2=$_SESSION["ΒΙΒΛΙΟ2"];
$bookname3=$_SESSION["ΒΙΒΛΙΟ3"];
$bookname4=$_SESSION["ΒΙΒΛΙΟ4"];
$bookname5=$_SESSION["ΒΙΒΛΙΟ5"];
$cost=$_SESSION["ΧΡΕΩΣΗ"];
$mail=$_SESSION["EMAIL"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nikos2";

$conn = mysqli_connect($servername, $username, $password, $dbname);

mysqli_set_charset($conn, "utf8");

if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}else{
	
	$sql= "INSERT INTO vivlia(BOOK,N_BOOK,BOOK_two,N_BOOK_two,BOOK_Three,N_BOOK_Three,BOOK_Four,N_BOOK_Four,BOOK_Five,N_BOOK_Five,Email,cost) 
	VALUES ('$bookname1','$numberbook1','$bookname2','$numberbook2','$bookname3','$numberbook3','$bookname4','$numberbook4','$bookname5','$numberbook5','$mail','$cost')" ;
	if ($conn->query($sql)){
		echo "New record is inserted sucessfully";	
	}
	else{
		echo "Error: ".$sql."<br>".$conn->error;
	}
}
echo "για επιστροφή στην κεντρική σελίδα πατηστε";
echo "<a href='ΚΕΝΤΡΙΚΗ ΣΕΛΙΔΑ.HTML'> εδω";
//κλείσιμο σύνδεσης
mysqli_close($conn);
?>
