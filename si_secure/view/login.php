<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/style.css">
    <title>Login Page</title>
</head>

<body>
    <form action="../config/login_config.php" method="POST">
        <h1>Halaman Login</h1>
        <p>Masukan Nama Dan Password Untuk Login</p>
        <div class="username">
            <label for="username">Username</label>
            <br>
            <input type="text" name="username">
        </div>
        <br>
        <div class="password">
            <label for="password">Password</label>
            <br>
            <input type="password" name="password">
        </div>
        <br>
        <div class="btn">
            <button type="submit" value="login" name="Login" style="margin-bottom:10px; margin-right:10px;">Login</button>
            <button type="button" value="kirim"><a href="regist.php">Register</a></button>
        </div>
    </form>
</body>

</html>