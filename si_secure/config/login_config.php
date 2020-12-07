<?php
include 'config.php';
include '../helper/helper.php';

if (isset($_POST['Login'])) {
    $username = $conn->real_escape_string($_POST["username"]);
    $password = $conn->real_escape_string($_POST["password"]);
    $sql = "SELECT m1.username, m1.password FROM user m1 WHERE m1.username='" . $username . "'";
    $fUsername = "";
    $fPassword = "";
    if ($result = $conn->query($sql)) {
        while ($row = $result->fetch_row()) {
            $fUsername = $row[0];
            $fPassword = $row[1];
        }
        $result->free_result();
    }
    if (!hash_verify($password, $fPassword)) {
        die("bangke");
    }
    session_start();
    $_SESSION["username"] = $username;
    header("Location: ../view/admin/dashboard.php");
    $conn->close();
}
