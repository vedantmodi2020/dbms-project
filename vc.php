<?php

$cid = $_POST['CenterID'];
$name = $_POST['Name'];
$openat = $_POST['OpensAt'];
$Closeat = $_POST['ClosesAt'];
$av = $_POST['AvailableVaccines'];
$vname = $_POST['VaccineName'];

$conn = new mysqli('localhost','root','Mahabharata@123','EX2');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else
{
    $stmt = $conn->prepare("insert into vc(centerid,name,openat,closesat,avlvaccine,vname)
    values(?,?,?,?,?,?)");
    $stmt->bind_param("isssis",$cid,$name,$openat,$Closeat,$av,$vname);
    $stmt->execute();
echo "Registration SuccessFull";
$stmt->close();
$conn->close();
}
?>