<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/regist_style.css">
    <title>Register</title>
</head>

<body>
    <form action="../config/register_config.php" method="POST">
        <h1>Halaman Register</h1>
        <p>Masukan Nama dan Password untuk register pengguna baru</p>
        <div>
            <label for="username">Username</label>
            <input type="text" name="username">
        </div>
        <br>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <br>
        <button type="submit" value="Save" name="Save">Register</button>
        <button type="button"><a href="login.php">Login</a></button>
    </form>
</body>

</html>