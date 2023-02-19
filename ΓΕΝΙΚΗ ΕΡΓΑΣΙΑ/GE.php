

<?php
// Start the session
session_start();


// Set session variables
$_SESSION["EMAIL"]=$_POST['EM'];
$_SESSION["ΑΝΤΙΤΥΠΑ1"] = $_POST['N_COPY1'];
$_SESSION["ΑΝΤΙΤΥΠΑ2"] = $_POST['N_COPY2'];
$_SESSION["ΑΝΤΙΤΥΠΑ3"] = $_POST['N_COPY3'];
$_SESSION["ΑΝΤΙΤΥΠΑ4"] = $_POST['N_COPY4'];
$_SESSION["ΑΝΤΙΤΥΠΑ5"] = $_POST['N_COPY5'];
$_SESSION["ΒΙΒΛΙΟ1"]=$_POST['book1'];
$_SESSION["ΒΙΒΛΙΟ2"]=$_POST['book2'];
$_SESSION["ΒΙΒΛΙΟ3"]=$_POST['book3'];
$_SESSION["ΒΙΒΛΙΟ4"]=$_POST['book4'];
$_SESSION["ΒΙΒΛΙΟ5"]=$_POST['book5'];

$_SESSION["ΧΡΕΩΣΗ"]=(($_SESSION["ΑΝΤΙΤΥΠΑ1"]*"10.5")+($_SESSION["ΑΝΤΙΤΥΠΑ2"]*"12.3")+($_SESSION["ΑΝΤΙΤΥΠΑ3"]*"13.8")+($_SESSION["ΑΝΤΙΤΥΠΑ4"]*"4.6")+($_SESSION["ΑΝΤΙΤΥΠΑ5"]*"12.9"));

echo "ΕΧΕΤΕ ΕΠΙΛΕΞΕΙ ΤΑ ΕΞΗΣ ΒΙΒΛΙΑ";
echo "<p></p>";
echo $_SESSION["ΒΙΒΛΙΟ1"];
echo "<br>" ;
echo $_SESSION["ΑΝΤΙΤΥΠΑ1"]; echo " " ; echo "αντίτυπο/α" ;
echo "<br>" ;
echo $_SESSION["ΒΙΒΛΙΟ2"];
echo "<br>" ;
echo $_SESSION["ΑΝΤΙΤΥΠΑ2"];echo " " ; echo "αντίτυπο/α" ;
echo "<br>";
echo $_SESSION["ΒΙΒΛΙΟ3"];
echo "<br>" ;
echo $_SESSION["ΑΝΤΙΤΥΠΑ3"];echo " " ; echo "αντίτυπο/α" ;
echo "<br>";
echo $_SESSION["ΒΙΒΛΙΟ4"];
echo "<br>" ;
echo $_SESSION["ΑΝΤΙΤΥΠΑ4"];echo " " ; echo "αντίτυπο/α" ;
echo "<br>";
echo $_SESSION["ΒΙΒΛΙΟ5"];
echo "<br>" ;
echo $_SESSION["ΑΝΤΙΤΥΠΑ5"];echo " " ; echo "αντίτυπο/α" ;

echo "<p></p>";
echo "Το κόστος είναι";
echo "<br>" ;
echo $_SESSION ["ΧΡΕΩΣΗ"];
echo "<p></p>";
echo "για οριστική καταχώρηση των επιλογών σας πατήστε";
echo "<a href='GE2.PHP'> εδω";
echo "<br>";
echo "για επιστροφή στην κεντρική σελίδα πατηστε";
echo "<a href='ΚΕΝΤΡΙΚΗ ΣΕΛΙΔΑ.HTML'> εδω";
?>