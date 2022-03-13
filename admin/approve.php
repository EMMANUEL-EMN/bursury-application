<?php
require_once '../main/dbconn.php';
$email=$_REQUEST['unique'];
$id=$_GET['id'];
if (isset($email)) {

$status="approved";
$query="UPDATE `application` SET `status`='$status' WHERE `email`='$email'";
$runq=$conn->query($query);
if ($runq) {
    echo " <script>
    alert('Successful approved');
    </script>";
    echo " <script>
    location.href='./application.php';
    </script>";
   
}else{
    echo " <script>
    alert('Not approved');
    </script>";
    echo " <script>
    location.href='./application.php';
    </script>";
}
  
}
if (isset($id)) {
    $s="approved";
    $q="UPDATE `other` SET `status`='$s' WHERE `iemail`='$id'";
    $r=$conn->query($q);

    if ($r) {
        echo " <script>
        alert('Successful approved');
        </script>";
        echo " <script>
        location.href='./application.php';
        </script>";
       
    }else{
        echo " <script>
        alert('Not approved');
        </script>";
        echo " <script>
        location.href='./application.php';
        </script>";
    }  
}
?>