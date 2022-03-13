
<?php
require_once '../main/dbconn.php';
function data($var){
    $var=htmlentities($var);
    $var=htmlspecialchars($var);
    $var=trim($var);
    $var=stripslashes($var);
    return $var;
    }
    if (isset($_POST['cbtn'])){
        
    $comment=data($_POST['comment']);
    $email=data($_POST['email']);
    $date=date('Y-m-d');
    

    $sql="INSERT INTO `comments` (`comment`,`email`,`date`)
    VALUES ('$comment','$email','$date')";
    $runq=$conn->query($sql);
   
    if ($runq) {
       
        echo "<script>
        alert('successfull submited');
        window.location.assign('./comment.php');
        </script>";
    }else {
        echo "<script>
        alert('Not successfull submited');
       window.location.assign('./comment.php');
        </script>";
       //  echo $conn->error;  
    }
}else {
    header("location: ../index.php");
}
$conn->close();
?>