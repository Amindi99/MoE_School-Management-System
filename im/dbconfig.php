<?php

$provience      = $_POST['provience'];
$district       = $_POST['district'];
$zone           = $_POST['zone'];
$schoolname     = $_POST['schoolname'];
$principalname  = $_POST['principalname'];
$principalemail = $_POST['principalemail'];

//Database connection
$conn = new mysqli('localhost', 'root' ,'' ,'ministry_edu');
if($conn->connect_error){
    die('Conection failed :' .$conn->connect_error);
    
}else{
     $stmt = $conn->prepare("insert into computer-reg(provience, district, zone, schoolname, principalname, principalemail)
     values(?,?,?,?,?,?)");
     $stmt->bind_param("ssssss",$provience, $district, $zone, $schoolname, $principalname, $principalemail);
     $stmt->execute();
     echo "Data inserted successfully";
     $stmt->close();
     $conn->close();
}

?>