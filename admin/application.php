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
$query="SELECT * FROM `application` WHERE `status`='pending' ORDER BY `aid` DESC";
$runq=$conn->query($query);

?>
<center>
<div class="flexBox">
<div>
    <h3>Students Fund Applications</h3>
    <table>
    <thead>
        <th>Profile</th>
        <th>Full Name</th>
        <th>Category</th>
        <th>County</th>
        <th>Action</th>
    </thead>
        <tbody>
        <?php
            while ($results=$runq->fetch_assoc()) {
            $sql="SELECT * FROM `user` WHERE `email`='$results[email]'";
            $runquery=$conn->query($sql);
            $returned=$runquery->fetch_assoc();
            $img="../profile/".$returned['image'];

        ?>
        <tr>
            <td><img src="<?php echo $img; ?>" alt="" id="img" height="50px" width="50px"></td>
            <td><?php echo $returned['fname']." ".$returned['lname']; ?></td>
            <td><?php echo $returned['category']; ?></td>
            <td><?php echo $returned['county']; ?></td>
            <td><a id="anchor" href="single_applicant.php?unique=<?php echo $results['email']; ?>">
            <button>View Details</button>
            </a></td>
        </tr>
        <?php
            
            } 
           ?>

       
        </tbody>
    </table>
</div>
    <div>
    <h3>Institution Fund Applications</h3>
    <table>
    <thead>
        <th>Institution Email</th>
        <th>Institution Name</th>
        <th>Category</th>
        <th>Area of Work</th>
        <th>Action</th>
    </thead>
        <tbody>
        <?php
            $q="SELECT * FROM `other` WHERE `status`='pending'";
            $r=$conn->query($q);
            while ($re=$r->fetch_assoc()){

        ?>
        <tr>
            <td><?php echo $re['iemail']; ?></td>
            <td><?php echo $re['name']; ?></td>
            <td><?php echo $re['category']; ?></td>
            <td><?php echo $re['area']; ?></td>
            <td><a id="anchor" href="single_applicant.php?id=<?php echo $re['email']; ?>">
            <button>View Details</button>
            </a></td>
        </tr>
        <?php
            
            } 
           ?>

       
        </tbody>
    </table>
       
    </div>
</div>
</center>
<br>
 <?php
 require_once '../footer.php';
 ?>
</body>
</html>