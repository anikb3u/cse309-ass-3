<?php
$sname="localhost";
$uname="root";
$password="";
$db_name="cont";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if(!$conn){
    echo "Server error: ";
}

if(isset($_POST['submit'])){
    $name =$_POST['user_name'];
    $contactno = $_POST['contactNo'];
    $gmail = $_POST['email'];
    $text = $_POST['message'];

    $sql = "INSERT INTO form_detail (name, cno ,email , message) VALUES ('$name', '$contactno','$gmail','$text')";

    if(mysqli_query($conn, $sql)){
        echo"contact information added successfully, you will be notified via email";
        die();
    }
    else{
        echo "error: try again later " . mysqli_error($conn);
    }
}
?>