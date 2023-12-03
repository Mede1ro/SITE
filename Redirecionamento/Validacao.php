<?php

$user = $_POST["user"];
$pass = $_POST["pass"];

if ($user == "Igor" and $pass == "123") {
    header("Location: ../Pages/Dashboard.php");
} elseif ($user == "Luiz" and $pass == "123") {
    header("Location: ../Pages/Registro.php");
} elseif (!empty($user) and !empty($pass)) {
    header("Location: ../Index.php");
} else {
    print("Nome/Senha inválidos!");
}

?>