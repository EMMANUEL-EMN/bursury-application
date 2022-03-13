<?php
session_start();
require_once '../main/dbconn.php';
function data($var){
    $var=htmlentities($var);
    $var=htmlspecialchars($var);
    $var=trim($var);
    $var=stripslashes($var);
    return $var;
    }
$name=data($_POST['name']);
$area=data($_POST['area']);
$activity=data($_POST['activity']);
$category=data($_POST['category']);
$purpose=data($_POST['purpose']);
$iemail=data($_POST['email']);
$email=$_SESSION['user'];
$status="pending";

$query="INSERT INTO `other` (`name`,`area`,`activity`,`category`,`purpose`,`iemail`,`status`,`email`)
VALUES ('$name','$area','$activity','$category','$purpose','$iemail','$status','$email')";
$runq=$conn->query($query);

if ($runq) {
    echo "<script>
    alert('successful submited');
    </script>";
    echo "<script>
    window.location.assign('./application.php');
    </script>";
}else {
    echo $conn->error;
    echo "<script>
    alert('Not successful submited');
    </script>";
    echo "<script>
    //window.location.assign('./application.php');
    </script>";
}


$conn->close();
    ?>