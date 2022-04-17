<?php
$rd=$_POST=['ReportedDate'];
$place=$_POST['Place'];
$noc=$_POST['NumberOfCases'];
$cr=$_POST['CuredRate'];
$dr=$_POST['DeathRate'];
$cfr=$_POST['CFR'];
$alert= $_POST['Alert'];
$Zplace = $_POST['ZPlace'];
$conn = new mysqli('localhost','root','Mahabharata@123','EX2');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else
{
    $stmt = $conn->prepare("insert into cases(reportdate,place,numberofcase,curedrate,deathrate,cfr,alert,zplace)
    values(?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssiiiiss",$rd,$place,$noc,$cr,$dr,$cfr,$alert,$Zplace);
    $stmt->execute();
echo "Registration SuccessFull";
$stmt->close();
$conn->close();
}
?>