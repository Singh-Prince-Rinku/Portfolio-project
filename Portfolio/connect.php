<?php
$Name = $_POST['Name'];
$Mail = $_POST['Mail'];
$Message = $_POST['Message'];

$conn = new mysqli('localhost','root','','test');
if ($conn->connect_error){
    die("Connection error: " . $conn->connect_error);
}
else{
    $stmt = $conn -> prepare("Insert into Portfolio(Name,Mail,Message) values(?, ?, ?)");
};

$stmt -> bind_param("sss", $Name, $Mail, $Message);
$stmt -> execute();
echo "Thanku for feedback";
$stmt -> close();
$conn -> close();
?>