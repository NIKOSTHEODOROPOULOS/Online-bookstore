<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nikos2";
// Δημιουργία σύνδεσης
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Έλεγχος σύνδεσης
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
//ορισμός charset της σύνδεσης ώστε να παρουσιάζονται τα ελληνικά σωστά
mysqli_set_charset($conn, "utf8");
    $sql = "SELECT BOOK,N_BOOK,BOOK_two,N_BOOK_two,BOOK_Three,N_BOOK_Three,BOOK_Four,N_BOOK_Four,BOOK_Five,N_BOOK_Five,Email,cost  FROM vivlia
    WHERE Email='".$_POST['EM1']."'";


$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    echo "<table style='border:12px solid black;font-size:15pt; font-family:times new roman; color:red; background-color:yellow'>";
   echo
   "<tr><th>Βιβλιο</th><th>Αντιτυπα</th><th>Βιβλιο</th><th>Αντιτυπα</th><th>Βιβλιο</th><th>Αντιτυπα</th><th>Βιβλιο</th><th>Αντιτυπα</th><th>Βιβλιο</th><th>Αντιτυπα</th><th>Χρεωση</th></tr>";
   // εκτύπωση αποτελεσμάτων
    while($row = mysqli_fetch_assoc($result)) {
   echo "<tr><td>".$row['BOOK']."</td>".
   "<td>".$row['N_BOOK']."</td>".
   "<td>".$row['BOOK_two']."</td>".
   "<td>".$row['N_BOOK_two']."</td>".
   "<td>".$row['BOOK_Three']."</td>".
   "<td>".$row['N_BOOK_Three']."</td>".
   "<td>".$row['BOOK_Four']."</td>".
   "<td>".$row['N_BOOK_Four']."</td>".
   "<td>".$row['BOOK_Five']."</td>".
   "<td>".$row['N_BOOK_Five']."</td>".
   "<td>".$row['Email']."</td>".
   "<td>".$row['cost']."</td></tr>";
    }
   echo "</table>" ;
   } else {
    echo "0 εγγραφές βρέθηκαν";
   }
echo "<br>";
echo "για επιστροφή στην κεντρική σελίδα πατηστε";
echo "<a href='ΓΕΝΙΚΗ ΕΡΓΑΣΙΑ.HTML'> εδω";
   //κλείσιμο σύνδεσης
   mysqli_close($conn);
?>