<?php

$hid = $_POST['hospital_id'];
$hname = $_POST['HospitalName'];
$branch = $_POST['Branch'];
$ba = $_POST['BedsAvailable'];
$repordate =$_POST['ReportedDate'];
$place = $_POST['Place'];
$city = $_POST['City'];
$pnum = $_POST['PhoneNumber'];

$conn = new mysqli('localhost','root','Mahabharata@123','EX2');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else
{
    $stmt = $conn->prepare("insert into hospital(hid,hname,branch,ba,reportdate,place, city,pnum)
    values(?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ississsi",$hid,$hname,$branch,$ba,$repordate,$place,$city,$pnum);
    $stmt->execute();
echo "Registration SuccessFull";
$stmt->close();
$conn->close();
}


?>