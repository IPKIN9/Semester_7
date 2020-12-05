<?php
include 'config.php';
include '../helper/helper.php';
// $bcrypt = password_hash($_POST['password'], PASSWORD_DEFAULT);
if (isset($_POST['Save'])) {
    $bcrypt = hash_pass($_POST['password']);
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($bcrypt);

    $sql = "INSERT INTO user (id, username, password) VALUES ('','$username', '$password')";
    if (mysqli_query($conn, $sql)) {
        header("Location: ../view/login.php");
    } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    header("Location: ../view/login.php");
}
