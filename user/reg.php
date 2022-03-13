<?php
require_once '../main/dbconn.php';
function data($var){
    $var=htmlentities($var);
    $var=htmlspecialchars($var);
    $var=trim($var);
    $var=stripslashes($var);
    return $var;
    }
if (isset($_POST['application'])) {
    //BASIC INFO
    $email=data($_POST['email']);
    $constituency=data($_POST['constituency']);
    $village=data($_POST['village']);
    $address=data($_POST['address']);
    $id=data($_POST['id']);
    $dob=data($_POST['dob']);

    //education details
    $primary=data($_POST['primary']);
    $pgrade=data($_POST['pgrade']);
    $high=data($_POST['high']);
    $hgrade=data($_POST['hgrade']);
    $campus=data($_POST['campus']);
    $level=data($_POST['level']);

    //fathers details
    $fname=data($_POST['fname']);
    $flname=data($_POST['lname']);
    $femail=data($_POST['femail']);
    $fconstituency=data($_POST['fconstituency']);
    $festatus=data($_POST['festatus']);
    $fsalary=data($_POST['dsalary']);
    $fid=data($_POST['fid']);
    $fdob=data($_POST['fdob']);

    //mother details
    $mname=data($_POST['mfname']);
    $mlname=data($_POST['mlname']);
    $memail=data($_POST['memail']);
    $mconstituency=data($_POST['mconstituency']);
    $mestatus=data($_POST['mestatus']);
    $msalary=data($_POST['msalary']);
    $mid=data($_POST['mid']);
    $mdob=data($_POST['mdob']);
    
    //employment details
    $labour=data($_POST['labour']);
    $type=data($_POST['type']);
    $area=data($_POST['area']);
    $salary=data($_POST['salary']);
    $status="pending";

    $query="INSERT INTO `application` (`constituency`,`village`,
    `email`,`id number`,`dob`,`primary school`,
    `pgrade`,`high school`,`hgrade`,`campus`,`cgrade`,
    `father fname`,`father lname`,`father email`,
    `father constituency`,`father employed`,`father salary`,`father dob`,`father id`,
    `mother fname`,`mother lname`,`mother email`,`mother constituency`,`mother employed`,`mother salary`,
    `mother dob`,`mother id`,`labour provided`,`employment status`,`place of work`,`salary`,`status`) 
    VALUES ('$constituency','$village','$email','$id','$dob','$primary','$pgrade','$high','$hgrade','$campus','$level',
    '$fname','$flname','$femail','$fconstituency','$festatus','$fsalary','$fdob','$fid','$mname',
    '$mlname','$memail','$mconstituency','$mestatus','$msalary','$mdob','$mid','$labour','$type',
    '$area','$salary','$status')";
    $runq=$conn->query($query);
    if ($runq) {
        echo "<script>
        alert('successful submited');
        </script>";
        echo "<script>
        window.location.assign('./application.php');
        </script>";
    }else {
        //echo $conn->error;
        echo "<script>
        alert('Not successful submited');
        </script>";
        echo "<script>
        window.location.assign('./application.php');
        </script>";
    }



}
$conn->close();

    ?>