<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    // Dummy credentials for validation
    $ValidUsername = "Algi";
    $validPassword = "123";

    if ($user == $ValidUsername && $pass == $validPassword) {
        header("Location: ../Dashboard/admin.php");
        exit;
    } else {
        echo "<script>alert('Username atau password salah.');</script>";
    }
}
?>
    <left>
        <header>
            <div class="logo">
                <div class="header">
                    <img src="../Image/LOGO.png" alt="logo" height="75" width="140"/> 
                </div>
        </header>
    </left>
    <center>
        <main>
            <h2>Login</h2>
            <form action="login-proses.php" method="post">
                
                <td>Email / No.tlp :</td>
                <br><br>
                <td>
                    <input type="text" name="user">
                </td>
                <br><br>
                <td>Password :</td>
                <br><br>
                <td>
                    <input type="password" name="pass">
                </td>
                <br><br>
                <br>
                <br>
                <div class="buttons">
                    <a href="../Dashboard/admin.php" class="button">Login</a>
                    <br><br>
                    <br>
                    Belum daftar? <a href="register.php">Register</a>
            </form>
        </main>

        <footer>
            <h4>&copy; 2024 Sumber Belajar 2218013</h4>
        </footer>
    </center>
    <script>
        function Login() {
            var user = document.getElementById("user").value;
            var pass = document.getElementById("pass").value;
            var ValidUsername = "Algi";
            var validPassword = "123";
            if (user === "" || pass === "") {
                alert("Isi semua data terlebih dahulu.");
                return false;
            }
        }
    </script>
</body>

</html>