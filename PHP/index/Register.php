<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link rel="stylesheet" href="register.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <left>
        <header>
            <div class="logo">
                <div class ="header">
                    <img src="../Image/LOGO.png" alt="logo" height="75" width="140"/> 
            </div>
        </header>
    </left>
    <center>
        <main>
            <h2>Daftar</h2>
            <form action="register-proses.php" method="post">
                    <tr>
                        <td>Username :</td>
                        <br><br>
                        <td><input type="text" name="user" placeholder="Nama"></td>
                    </tr>
                    <tr>
                        <br><br>
                        <td>Password : </td>
                        <br><br>
                        <td><input type="password" name="user_pass" placeholder="Password"></td>
                    </tr>
                    <tr>
                        <br><br>
                        <td>Email / No.Tlp : </td>
                        <br><br>
                        <td><input type="email" name="mail" placeholder="Email / No.Tlp"></td>
                        <br><br>
                    </tr>
                    <div class="buttons">
                        <a href="admin.php" class="button">Register</a>
                    <br><br>
            </form>
        </main>
        <footer>
            <h4>&copy; 2024 Sumber Belajar 2218013</h4>
        </footer>
    </center>
</body>

</html>