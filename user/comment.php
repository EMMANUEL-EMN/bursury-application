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
?>
<center>
<div class="comment">
    <h3>Share with us</h3>
    <form action="server.php" method="POST">
        <label for="" class="labels">Email: </label>
       
        <input type="email" id="email" name="email" required>
        <br>
        <label for="comment" class="labels">Comment: </label>
       
        <textarea name="comment" id="comment" cols="30" rows="10" required></textarea>
        <br>
        <button class="btn" name="cbtn">Send</button>
    </form>
</div>
</center>
<br>
 <?php
 require_once '../footer.php';
 ?>
</body>
</html>