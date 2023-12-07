<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$contact = $_POST['contact'];
$message = $_POST['message'];


$link = mysqli_connect("localhost", "root", "", "formDB");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());

}

$sql = "INSERT INTO user_info (firstName, lastName, contact, message) VALUES ('$fname', '$lname', '$contact', '$message')";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";

}else {
    echo "ERROR: Could not able to execute $sql." . mysqli_error($link);
}

mysqli_close($link);



?>