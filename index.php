<?php
$firstName = $_Post['name'];
$email = $_Post['email'];
$number = $_Post['number'];
$qualification = $_Post['qualification'];
$course = $_Post['course'];

$conn = new Mysqli('localhost','root','','form');
if($conn->connect_error){
    die('connection Failed : '.$conn->connect_error);
}
else
{
    $stmt =$conn->prepare("insert into admission(name, email, number, qualification, course) 
    values(?,?,?,?,?)");
    $stmt->bind_param("ssiss", $name, $email, $number, $qualification, $course );
    $stmt->execute();
    echo "Submit Successfully.....";
    $stmt->close();
    $conn->close();
}

?>

