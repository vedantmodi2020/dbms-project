<?php
$bid = $_POST['BeneficiaryID'];
$ndk = $_POST['NumberOfDosesTaken'];
$Anumber = $_POST['AadharNumber'];
$Name = $_POST['Name'];
$date= $_POST['DateOfBirth'];
$city = $_POST['city'];
$street = $_POST['street'];
$state = $_POST['state'];
$Vid = $_POST['VaccinatorID'];

$conn = new mysqli('localhost','root','','Ex1',3308);
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else
{
    $stmt = $conn->prepare("insert into Beneficiary (BeneficiaryID,NumberOfDosesTaken,AadharNumber,Name,DateOfBirth,city,street,state,VaccinatorID)
values(?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("iiisssssi",$bid,$ndk,$Anumber,$Name,$date,$city,$street,$state,$Vid);
$stmt->execute();
echo "Registration SuccessFull";
$stmt->close();
$conn->close();
}
?>