<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "boatspot1";
$conn = mysqli_connect($host, $user, $pass, $dbname);

if(isset($_POST['submit']))
{
   $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['phno'];
    $msg = $_POST['msg'];

    $query = "INSERT into contactus(name,email,phno,msg) values('$name', '$email', '$number','$msg')";
    $result = mysqli_query($conn, $query);
  header("Location: index.html");
 }