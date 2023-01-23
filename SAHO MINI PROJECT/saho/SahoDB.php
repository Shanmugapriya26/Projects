<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email  = $_POST['email'];
$Genere = $_POST['Genere'];
$gender = $_POST['gender'];
$dDate = $_POST['dDate'];
$city = $_POST['city'];
$ppin = $_POST['ppin'];
$sstate = $_POST['sstate'];
$ppassword = $_POST['ppassword'];
if (!empty($firstname) || !empty($lastname) || !empty($email) || !empty($Genere) || !empty($gender) || !empty($dDate) || !empty($city) || !empty($ppin) || !empty($sstate) || !empty($ppassword))
{
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "sahodb";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $SELECT = "SELECT email From sahotable Where email = ? Limit 1;";
  $INSERT = "INSERT Into sahotable (firstname , lastname , email ,Genere, gender, dDate, city, ppin, sstate, ppassword )values(?,?,?,?,?,?,?,?,?,?)";

//Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

     //checking username
      if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssssisiss", $firstname,$lastname,$email,$Genere,$gender,$dDate,$city,$ppin,$sstate,$ppassword);
      $stmt->execute();
      echo "Sucessfully registered";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>