<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funds Application</title>
    <link rel="stylesheet" href="../css/main.css">
    <script src="../js/main.js"></script>
</head>
<body>
    <?php require_once 'nav.html'; ?>

<center>
    <div class="reg">
        <form action="server.php" method="POST" enctype="multipart/form-data">
        <h4>Create Account</h4>
        <span id="errors"></span>
            <table id="tb">
                <tr>
                    <td>First Name</td>
                    <td>Last Name</td>
                </tr>
                <tr>
                    <td><input type="text" name="fname" id="fname" required></td>
                    <td><input type="text" name="lname" id="lname" required></td>
                </tr>
                <tr>
                    <td>Middle Name</td>
                    <td>Huduma Number</td>
                </tr>
                <tr>
                    <td><input type="text" name="mname" id="mname" required></td>
                    <td><input type="number" name="hn" id="hn" ></td>
                </tr>
                <tr>
                    <td>Mobile Number</td>
                    <td>County</td>
                </tr>
                <tr>
                    <td><input type="number" name="mobnum" id="mobnum" required></td>
                    <td><input type="text" name="county" id="county" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>Password</td>
                </tr>
                <tr>
                    <td><input type="email" name="email" id="email" required></td>
                    <td><input type="password" name="password" id="password" required></td>
                </tr>
                <tr>
                <td>Profile Image</td>
                <td>Applicant Category</td> 
                </tr>
                <tr>
                    <td><input type="file" name="image" id="image"></td>
                    <td>
                        <select name="category" id="category">
                            <option value="women">Women</option>
                            <option value="youth">Youth</option>
                            <option value="student">Bursary</option>
                            <option value="school">School</option>
                            <option value="hospital">Hospital</option>
                            <option value="infrastructure">Ward Infrastructure </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><Button class="rbtn" name="reg">REGISTER</Button></td>
                </tr>
            </table>
        </form>
    </div>
</center>

    <?php require_once '../footer.php'; ?>
</body>
</html>