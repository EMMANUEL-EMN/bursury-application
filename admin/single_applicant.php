<?php
session_start();/*
if (!isset($_SESSION['admin'])) {
   header("location: ../index.php");
}*/

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
if (isset($_GET['unique'])) {

$sql="SELECT * FROM `application` WHERE `email`='$_GET[unique]'";
$runq=$conn->query($sql);
$results=$runq->fetch_assoc();

$query="SELECT * FROM `user` WHERE `email`='$_GET[unique]'";
$runquery=$conn->query($query);
$returned=$runquery->fetch_assoc();
$imgurl="../profile/".$returned['image'];
?>
<center>
    <img src="<?php echo $imgurl; ?>" alt="" id="uimg">
</center>
<div class="content">
<div class="personal">
    <h3>Personal Details</h3>
    <table>
        <tr>
            <td>Full Name: </td>
            <td><?php echo $returned['fname']." ".$returned['lname']; ?></td>
        </tr>
        <tr>
            <td>Huduma Number: </td>
            <td><?php echo $returned['huduma number']; ?></td>
        </tr>
        <tr>
            <td>County: </td>
            <td><?php echo $returned['county']; ?></td>
        </tr>
        <tr>
            <td>Mobile Number: </td>
            <td><?php echo $returned['mobile number']; ?></td>
        </tr>
        <tr>
            <td>Email : </td>
            <td><?php echo $results['father email']; ?></td>
        </tr>
        <tr>
            <td>Father`s Salary: </td>
            <td><?php echo $results['father salary']; ?></td>
        </tr>
    </table>
    </div>
<div class="Education">
    <h3>Education Details</h3>
    <table>
        <tr>
            <td>Primary School: </td>
            <td><?php echo $results['primary school']; ?></td>
        </tr>
        <tr>
            <td>Marks Attained : </td>
            <td><?php echo $results['pgrade']; ?></td>
        </tr>
        <tr>
            <td>High School: </td>
            <td><?php echo $results['high school']; ?></td>
        </tr>
        <tr>
            <td>High School Grade: </td>
            <td><?php echo $results['hgrade']; ?></td>
        </tr>
        <tr>
            <td>Campus : </td>
            <td><?php echo $results['campus']; ?></td>
        </tr>
        <tr>
            <td>Curent Year of Study: </td>
            <td><?php echo $results['cgrade']; ?></td>
        </tr>
    </table>
    </div>
    <div class="father">
    <h3>Father`s Details</h3>
    <table>
        <tr>
            <td>Full Name: </td>
            <td><?php echo $results['father fname']." ".$results['father lname']; ?></td>
        </tr>
        <tr>
            <td>ID Number: </td>
            <td><?php echo $results['father id']; ?></td>
        </tr>
        <tr>
            <td>Constuency: </td>
            <td><?php echo $results['constituency']; ?></td>
        </tr>
        <tr>
            <td>Emloyment Status: </td>
            <td><?php echo $results['father employed']; ?></td>
        </tr>
        <tr>
            <td>Email : </td>
            <td><?php echo $results['father email']; ?></td>
        </tr>
        <tr>
            <td>Father`s Salary: </td>
            <td><?php echo $results['father salary']; ?></td>
        </tr>
    </table>
    </div>
    <div class="Mother">
    <h3>Mother`s Details</h3>
    <table>
        <tr>
            <td>Full Name: </td>
            <td><?php echo $results['mother fname']." ".$results['mother lname']; ?></td>
        </tr>
        <tr>
            <td>ID Number: </td>
            <td><?php echo $results['mother id']; ?></td>
        </tr>
        <tr>
            <td>Constuency: </td>
            <td><?php echo $results['mother constituency']; ?></td>
        </tr>
        <tr>
            <td>Emloyment Status: </td>
            <td><?php echo $results['mother employed']; ?></td>
        </tr>
        <tr>
            <td>Email : </td>
            <td><?php echo $results['mother email']; ?></td>
        </tr>
        <tr>
            <td>Father`s Salary: </td>
            <td><?php echo $results['mother salary']; ?></td>
        </tr>
    </table>
    </div>
</div>
<center>
    <a href="approve.php?unique=<?php echo $results['email']; ?>"><button>Approve</button></a>
    <a href="decline.php?unique=<?php echo $results['email']; ?>"><button>Decline</button></a>
</center>
<?php 
}else{   
?>

    <center>
        <div>
        <h3>Institution Fund Applications</h3>
    <table>
    <?php
            $q="SELECT * FROM `other` WHERE `email`='$_GET[id]'";
            $r=$conn->query($q);
            $re=$r->fetch_assoc();

        ?>
        <tr>
            <td>Institution Name</td>
            <td><?php echo $re['name']; ?></td>
        </tr>
        <tr>
            <td>Institution Email</td>
            <td><?php echo $re['iemail']; ?></td>
        </tr>
        <tr>
            <td>Category</td>
            <td><?php echo $re['category']; ?></td>
        </tr>
        <tr>
            <td>Area of Work</td>
            <td><?php echo $re['area']; ?></td>
        </tr>
        <tr>
            <td>Purpose</td>
            <td><?php echo $re['purpose']; ?></td>
        </tr>
        <tr>
            <td>Activity Engaged</td>
            <td><?php echo $re['activity']; ?></td>
        </tr>

    </table>
       </div> 
       <center>
    <a href="approve.php?id=<?php echo $re['iemail']; ?>"><button>Approve</button></a>
    <a href="decline.php?id=<?php echo $re['iemail']; ?>"><button>Decline</button></a>
</center>
    </center>

    <?php } ?>

 <?php
 require_once '../footer.php';
 ?>
</body>
</html>