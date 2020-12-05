<?php
function hash_pass($data)
{
    $bcrypt = password_hash($data, PASSWORD_DEFAULT);
    return $bcrypt;
}

function hash_verify($plain_text, $hash_text)
{
    $bycript = password_verify($plain_text, $hash_text);
    return $bycript;
}
function session_check()
{
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: ../login.php");
    }
}
