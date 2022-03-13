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
$query="SELECT * FROM `comments`";
$runq=$conn->query($query);

?>
<center>
<div>
    <h3>Applicants Comments</h3>
    <table>
    <thead>
        <th>Email</th>
        <th>Comments</th>
        <th>Date</th>

    </thead>
        <tbody>
        <?php
            while ($results=$runq->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $results['email']; ?></td>
            <td><?php echo $results['comment']; ?></td>
            <td><?php echo $results['date']; ?></td>
        </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
</div>
</center>
<br>
 <?php
 require_once '../footer.php';
 ?>
</body>
</html>