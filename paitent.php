<?php

$cname = $_POST['customer_name'];
$pid = $_POST['patient_id'];
$bnum = $_POST['bed_number'];
$quarantine = $_POST['quarantine'];
$admitdate = $_POST['admitted_date'];
$anumber = $_POST['aadhar_number'];
$dob = $_POST['dob'];
$city = $_POST['city'];
$street = $_POST['street'];
$state = $_POST['state'];
$did = $$_POST['doctor_id'];

$conn = new mysqli('localhost','root','Mahabharata@123','EX2');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else
{
    $stmt = $conn->prepare("insert into paitent(cname,pid,bnum,qauarantine,admitdate,anum,dob,city,street,state,did)
    values(?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("siississssi",$cname,$pid,$bnum,$quarantine,$admitdate,$anumber,$dob,$city,$street,$state,$did);
    $stmt->execute();
echo "Registration SuccessFull";
$stmt->close();
$conn->close();
}

?>