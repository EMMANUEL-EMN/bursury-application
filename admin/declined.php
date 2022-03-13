<?php
session_start();
/*
if (!isset()) {
   header("location: ../login_user.php");
}*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/user.css">
    <link rel="stylesheet" href="../css/main.css">
    <script src="../js/main.js"></script>
</head>
<body>
<?php 
require_once 'nav.html';
require_once '../main/dbconn.php';
$query="SELECT * FROM `application` WHERE `status`='declined' ORDER BY `aid` DESC";
$runq=$conn->query($query);

?>
<div class="flexBox">
<div>
    <h3>Students Application</h3>
    <table>
    <thead>
        <th>Profile</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Mobile Number</th>
        <th>Status</th>
    </thead>
        <tbody>
        <?php
            while ($results=$runq->fetch_assoc()) {
                $sql="SELECT * FROM `user` WHERE `email`='$results[email]'";
                $runquery=$conn->query($sql);
                $returned=$runquery->fetch_assoc();
        ?>
        <tr>
            <td><img src="<?php echo $img; ?>" alt="" id="img"></td>
            <td><?php echo $returned['fname']." ".$returned['lname']; ?></td>
            <td><?php echo $returned['email']; ?></td>
            <td><?php echo $returned['mobile number']; ?></td>
            <td><?php echo $results['status']; ?></td>
        </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
</div>
<div>
    <h3>Institution Applications</h3>
    <table>
    <thead>
        <th>Institution Email</th>
        <th>Institution Name</th>
        <th>Category</th>
        <th>Area of Work</th>
        
    </thead>
        <tbody>
        <?php
            $q="SELECT * FROM `other` WHERE `status`='declined'";
            $r=$conn->query($q);
            while ($re=$r->fetch_assoc()){

        ?>
        <tr>
            <td><?php echo $re['iemail']; ?></td>
            <td><?php echo $re['name']; ?></td>
            <td><?php echo $re['category']; ?></td>
            <td><?php echo $re['area']; ?></td>
        </tr>
        <?php
            
            } 
           ?>

       
        </tbody>
    </table>
       
    </div>
</div>
<br>
 <?php
 require_once '../footer.php';
 ?>
</body>
</html>