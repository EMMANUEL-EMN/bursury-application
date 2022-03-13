<?php
session_start();
if (!isset($_SESSION['admin'])) {
   header("location: ../index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <mea http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/user.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/animation.css">
    <script src="../js/main.js"></script>
</head>
<body>
<?php 
require_once 'nav.html';
require_once '../main/dbconn.php';
$sql="SELECT * FROM `admin` WHERE `email`='$_SESSION[admin]'";
$runq=$conn->query($sql);
$results=$runq->fetch_assoc();
$imgurl="../profile/".$results['image'];
?>
<center>
<div class="contents">
    <img src="<?php echo $imgurl; ?>" alt="" id="uimg" height="300px" width="400px">
    <table>
        <tr>
            <td>Full Name: </td>
            <td><?php echo $results['fname']." ".$results['lname']; ?></td>
        </tr>
        <tr>
            <td>Huduma Number: </td>
            <td><?php echo $results['huduma number']; ?></td>
        </tr>
        <tr>
            <td>Mobile Number: </td>
            <td><?php echo $results['mobile number']; ?></td>
        </tr>

        <tr>
            <td>County: </td>
            <td><?php echo $results['county']; ?></td>
        </tr>
        <tr>
            <td>Email : </td>
            <td><?php echo $results['email']; ?></td>
        </tr>
        
    </table>
</div>
</center>
 <?php
 require_once '../footer.php';
 ?>
</body>
</html>