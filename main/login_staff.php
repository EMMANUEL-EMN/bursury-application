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
        <div class="login">
            <form action="login.php" method="POST">
                <h4>LogIn To Dashboard</h4>
                <table>
                    <tr>
                        <td>Email</td>
                    </tr>
                    <tr>
                        <td><input type="email" name="email" id="email" required></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                    </tr>
                    <tr>
                        <td><input type="password" name="password" id="password" required></td>
                    </tr>
                    <tr>
                        <td>
                            <button name="staff" class="btn">LOGIN</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
</center>

    <?php require_once '../footer.php'; ?>
</body>
</html>