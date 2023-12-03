<?php

$user = $_POST["user"];
$pass = $_POST["pass"];

if (!empty($user) and !empty($pass)) {
    header("Location: ../Index.php");
} else {
    print("Nome/Senha inválidos!");
}
?>