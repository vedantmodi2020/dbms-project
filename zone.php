<?php
$alert = $_POST['Alert'];
$place= $_POST['Place'];
$Pincode= $_POST['Pincode'];
$conn = new mysqli('localhost','root','Mahabharata@123','EX2');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else
{
    $stmt = $conn->prepare("insert into zone(Alert,Place,Pincode)
    values(?,?,?)");
    $stmt->bind_param("ssi",$alert,$place,$Pincode);
    $stmt->execute();
echo "Registration SuccessFull";
$stmt->close();
$conn->close();
}

?>