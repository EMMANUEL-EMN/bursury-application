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
$sql="SELECT * FROM `user` WHERE `email`='$_SESSION[user]'";
$runq=$conn->query($sql);
$results=$runq->fetch_assoc();
if ($results['category']=="student") {
?>

<center>
   <form action="reg.php" method="POST">
    <div class="application">
        <h3>Bursary Application Form</h3>
        <fieldset>
            <legend>Basic Details</legend>
            <div>
                <table>
                    <tr>
                        <td>Email</td>
                        <td>Constituency</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="email" id="email" required></td>
                        <td><input type="text" name="constituency" id="constituency" required></td>
                    </tr>
                    <tr>
                        <td>Village</td>
                        <td>Address</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="village" id="village" required></td>
                        <td><input type="text" name="address" id="address" required></td>
                    </tr>
                    <tr>
                        <td>ID Number</td>
                        <td>Date Of Birth</td>
                    </tr>
                    <tr>
                        <td><input type="number" name="id" id="id" required></td>
                        <td><input type="date" name="dob" id="dob" required></td>
                    </tr>
                </table>
            </div>
        </fieldset>
        <fieldset>
            <legend>Education Details</legend>
            <div>
                <table>
                    <tr>
                        <td>Primary School</td>
                        <td>Grade</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="primary" id="primary" required></td>
                        <td><input type="text" name="pgrade" id="pgrade" required></td>
                    </tr>
                    <tr>
                        <td>High School</td>
                        <td>Grade</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="high" id="high" required></td>
                        <td><input type="text" name="hgrade" id="hgrade" required></td>
                    </tr>
                    <tr>
                        <td>Campus</td>
                        <td>Current Level</td>
                    </tr>
                    <tr>
                        <td><input type="tex" name="campus" id="campus" required></td>
                        <td><input type="text" name="level" id="level" required></td>
                    </tr>
                </table>
            </div>
        </fieldset>
        <fieldset>
            <legend>Fathers Details</legend>
            <div>
                <table>
                <tr>
                    <td>First Name</td>
                    <td>Last Name</td>
                </tr>
                <tr>
                    <td><input type="text" name="fname" id="fname" required></td>
                    <td><input type="text" name="lname" id="lname" required></td>
                </tr>
                    <tr>
                        <td>Email</td>
                        <td>Constituency</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="femail" id="email" required></td>
                        <td><input type="text" name="fconstituency" id="constituency" required></td>
                    </tr>
                    <tr>
                        <td>Employed</td>
                        <td>Monthly Salary</td>
                    </tr>
                    <tr>
                        <td>
                            Yes <input type="checkbox" name="festatus" value="yes" >
                            No <input type="checkbox" name="festatus" value="no">
                        </td>
                        <td><input type="number" name="dsalary" id="msalary" required></td>
                    </tr>
                    <tr>
                        <td>ID Number</td>
                        <td>Date Of Birth</td>
                    </tr>
                    <tr>
                        <td><input type="number" name="fid" id="id" required></td>
                        <td><input type="date" name="fdob" id="dob" required></td>
                    </tr>
                </table>
            </div>
        </fieldset>
        <fieldset>
            <legend>Mothers Details</legend>
            <div>
                <table>
                <tr>
                    <td>First Name</td>
                    <td>Last Name</td>
                </tr>
                <tr>
                    <td><input type="text" name="mfname" id="fname" required></td>
                    <td><input type="text" name="mlname" id="lname" required></td>
                </tr>
                    <tr>
                        <td>Email</td>
                        <td>Constituency</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="memail" id="email" required></td>
                        <td><input type="text" name="mconstituency" id="constituency" required></td>
                    </tr>
                    <tr>
                        <td>Employed</td>
                        <td>Monthly Salary</td>
                    </tr>
                    <tr>
                        <td>
                            Yes <input type="checkbox" name="mestatus" value="yes">
                            No <input type="checkbox" name="mestatus" value="no">
                        </td>
                        <td><input type="number" name="msalary" id="msalary" required></td>
                    </tr>
                    <tr>
                        <td>ID Number</td>
                        <td>Date Of Birth</td>
                    </tr>
                    <tr>
                        <td><input type="number" name="mid" id="id" required></td>
                        <td><input type="date" name="mdob" id="dob" required></td>
                    </tr>
                </table>
            </div>
        </fieldset>
        <fieldset>
            <legend>Employment Details</legend>
            <div>
                <table>
                    <tr>
                        <td>Labour Provided</td>
                        <td>Employment Status</td>
                    </tr>
                    <tr>
                        <td>
                            <select name="labour" id="labour">
                                <option value="skilled">Skilled</option>
                                <option value="unskilled">Unskilled</option>
                            </select>
                        </td>
                        <td>
                            <select name="type" id="type">
                                <option value="official">Official</option>
                                <option value="casual">Casual</option>
                                <option value="contract">Contract</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Place of Work</td>
                        <td>Salary Per Month</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="area" id="area" required></td>
                        <td><input type="number" name="salary" id="salary" required></td>
                    </tr>
                </table>
            </div>
        </fieldset>
        <button name="application" class="abtn">Submit</button>
    </div>
    </form> 
</center>
<?php }else { ?>
<center>
    <div id="reg">
        <form action="other.php" method="POST">
            <table>
                <tr>
                    <td>Institution/Organization Email</td>
                    <td>Institution Name</td>
                </tr>
                <tr>
                    <td><input type="email" id="email" name="email" required></td>
                    <td><input type="text" name="name" id="name" required></td>
                </tr>
                <tr>
                    <td>Area of Operation</td>
                    <td>Activity Engaged </td>
                </tr>
                <tr>
                    <td><input type="text" name="area" id="area" required></td>
                    <td><input type="text" name="activity" id="activity" required></td>
                </tr>
                <tr>
                    <td>Purpose</td>
                    <td>Category</td>
                </tr>
                 <tr>
                    <td><input type="text" name="purpose" id="purpose" required></td>
                    <td>
                    <select name="category" id="category">
                            <option value="women">Women</option>
                            <option value="youth">Youth</option>
                            <option value="school">School</option>
                            <option value="hospital">Hospital</option>
                            <option value="infrastructure">Ward Infrastructure </option>
                        </select>
                    </td>
                </tr>
            </table>
            <button>Submit</button>
        </form>

    </div>
</center>

<br>
 <?php
}
 require_once '../footer.php';
 ?>
</body>
</html>