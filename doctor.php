<?php

$did = $_POST['doctor_id'];
$dname = $_POST['doctor_name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$exp = $_POST['experience'];
$hosid = $_POST['hospital_id'];

$conn = new mysqli('localhost','root','Mahabharata@123','EX2');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else
{
    $stmt = $conn->prepare("insert into doctor(did,dname,age,gender,exp,hosid)
    values(?,?,?,?,?,?)");
    $stmt->bind_param("isisii",$did,$dname,$age,$gender,$exp,$hosid);
    $stmt->execute();
echo "Registration SuccessFull";
$stmt->close();
$conn->close();
}

?>