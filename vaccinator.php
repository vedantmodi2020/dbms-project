<?php
$Vacciid = $_POST['VaccinatorID'];
$name = $_POST['Name'];
$age = $_POST['Age'];
$gender = $_POST['gender'];
$cid = $_POST['CenterID'];
$conn = new mysqli('localhost','root','Mahabharata@123','EX2');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else
{
    $stmt = $conn->prepare("insert into vaccinator(vacciid,name,age,gender,centerid)
    values(?,?,?,?,?)");
    $stmt->bind_param("isisi",$Vacciid,$name,$age,$gender,$cid);
    $stmt->execute();
echo "Registration SuccessFull";
$stmt->close();
$conn->close();
}

?>