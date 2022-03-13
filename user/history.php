<?php
session_start();

if (!isset($_SESSION['user'])) {
   header("location: ../main/login_user.php");
}

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
$query="SELECT * FROM `other` WHERE `email`='$_SESSION[user]'";
$runq=$conn->query($query);
$sql="SELECT * FROM `user` WHERE `email`='$_SESSION[user]'";
$runq1=$conn->query($sql);
$results1=$runq1->fetch_assoc();
if ($results1['category']=="student") {
$q="SELECT * FROM `application` WHERE `email`='$_SESSION[user]'";
$r=$conn->query($q);
?>
<div>
    <h3>Fund Application History</h3>
    <table>
    <thead>
        <th>Email</th>
        <th>ID Number</th>
        <th>Constituency</th>
        <th>Status</th>
    </thead>
        <tbody>
        <?php
            while ($re=$r->fetch_assoc()) {
               
        ?>
        <tr>
            <td><?php echo $re['email']; ?></td>
            <td><?php echo $re['id number']; ?></td>
            <td><?php echo $re['constituency']; ?></td>
            <td><?php echo $re['status']; ?></td>
        </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
</div>

<?php }else { ?>
    <div>
    <h3>Fund Application History</h3>
    <table>
    <thead>
        <th>Email</th>
        <th>Institution Name</th>
        <th>Area Of Operation</th>
        <th>Status</th>
    </thead>
        <tbody>
        <?php
          while ($results=$runq->fetch_assoc()) {
            // print_r($results1);
        ?>
        <tr>
            <td><?php echo $results['email']; ?></td>
            <td><?php echo $results['name']; ?></td>
            <td><?php echo $results['area']; ?></td>
            <td><?php echo $results['status']; ?></td>
        </tr>
        <?php
           }
        ?>
        </tbody>
    </table>
</div> 
 <?php
}
 require_once '../footer.php';
 ?>
</body>
</html>