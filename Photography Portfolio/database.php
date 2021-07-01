<?php

// variables
$email = filter_input(INPUT_POST, 'email');

$database['host']='localhost';
$database['username']='root';
$database['userpass']='';
$database['name']='EDIT ME!'; // add your database name

$conn = mysqli_connect($database['host'],$database['username'],$database['userpass'],$database['name']) or die(mysqli_connect_error());

//$email = $_POST['email'];

if(!empty($email)){

    if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno() .') '
        . mysqli_connect_error());
        }
        else{
        $sql = "INSERT INTO `emailinfo`(`Email`) VALUES ('$email')";
        if ($conn->query($sql)){
        echo "New record is inserted sucessfully";
        }
        else{
        echo "Error: ". $sql ."
        ". $conn->error;
        }
        $conn->close();
    }
}
else{
    echo "its empty";
    die();
    } 
?>