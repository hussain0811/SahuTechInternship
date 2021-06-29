<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "evenz";
$conn = mysqli_connect($host, $user, $pass, $dbname);


if(isset($_POST['submit']))
{
    $msg = $_POST['msg'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $query = "INSERT into contactus(msg, name, email,number) values('$msg', '$name', '$email','$number')";
    $result = mysqli_query($conn, $query);

  header("Location: index.php");
 }