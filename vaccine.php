<?php
$vname = $_POST['VaccineName'];
$made = $_POST['MadeIn'];
$maintemp = $_POST['MaintainedTemperature'];
$dosereq = $_POST['DoseRequired'];
$tgid = $_POST['TimeGapindays'];
$conn = new mysqli('localhost','root','Mahabharata@123','EX2');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else
{
    $stmt = $conn->prepare("insert into vaccine(Vaccinename,madein,mainttemp,doserequried,timegapindays)
    values(?,?,?,?,?,?)");
    $stmt->bind_param("ssiii",$vname,$made,$maintemp,$dosereq,$tgid);
    $stmt->execute();
echo "Registration SuccessFull";
$stmt->close();
$conn->close();
}
?>