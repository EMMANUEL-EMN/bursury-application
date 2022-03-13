<?php
session_start();
require_once './dbconn.php'; 
function data($var){
    $var=htmlentities($var);
    $var=htmlspecialchars($var);
    $var=trim($var);
    $var=stripslashes($var);
    return $var;
}
if (isset($_POST['user'])) {
    $email=data($_POST['email']);
    $password=data($_POST['password']);
    $query="SELECT * FROM `user`";
    $runq=$conn->query($query);
    while ($results=$runq->fetch_assoc()) {
        if ($results['email']=== $email && $results['password'] === $password) {
            $_SESSION['user']=$results['email'];
            header("location: ../user/index.php");
        }else {
            echo"<script>
            alert('Invalid Login Credentials');
            </script>";
            echo " <script>
            window.location.assign('./login_user.php');
            </script>";
        }
    }

}elseif (isset($_POST['staff'])) {
    $email=data($_POST['email']);
    $password=data($_POST['password']);
    $query="SELECT * FROM `admin`";
    $runq=$conn->query($query);
    while ($results=$runq->fetch_assoc()) {
        if ($results['email']=== $email && $results['password'] === $password) {
            $_SESSION['admin']=$results['email'];
            header("location: ../admin/index.php");
        }else {
            echo"<script>
            alert('Invalid Login Credentials');
            </script>";
            echo " <script>
            window.location.assign('./login_staff.php');
            </script>";
           
        }
    }
 
}else {
    header("location: ../index.php");
}