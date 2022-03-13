<?php
require_once './dbconn.php'; 
function data($var){
    $var=htmlentities($var);
    $var=htmlspecialchars($var);
    $var=trim($var);
    $var=stripslashes($var);
    return $var;
}

if (isset($_POST['reg'])) {

    $fname=data($_POST['fname']);
    $lname=data($_POST['lname']);
    $mname=data($_POST['mname']);
    $hn=data($_POST['hn']);
    $mobnum=data($_POST['mobnum']);
    $county=data($_POST['county']);
    $email=data($_POST['email']);
    $password=data($_POST['password']);
    $image=$_FILES['image']['name'];
    $category=data($_POST['category']);

    $target_dir="../profile/";
    $file_path=$target_dir.basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'],$file_path);

    #insert data to database
    $query="INSERT INTO `user` (`fname`,`lname`,`mname`,`huduma number`,
    `mobile number`,`county`,`email`,`password`,`image`,`category`)
     VALUES ('$fname','$lname','$mname','$hn','$mobnum','$county','$email','$password','$image','$category')";
     $runq=$conn->query($query);   

     if ($runq) {
        echo " <script>
        alert('Successful registered');
        </script>";
        echo " <script>
        window.location.assign('./reg_user.php');
        </script>";
     }else {
        echo"<script>
        alert('Not registered please check your huduma number');
        </script>";
        echo " <script>
        window.location.assign('./reg_user.php');
        </script>";
//echo $conn->error;
     }

}

$conn->close();
?>