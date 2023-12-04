<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = isset($_POST["user"]) ? $_POST["user"] : "";
    $pass = isset($_POST["pass"]) ? $_POST["pass"] : "";


    if ($user == "Igor" and $pass == "123") {

        header("Location: ../Pages/Dashboard.php");
    } elseif ($user == "Luiz" and $pass == "123") {

        $_SESSION["user_type"] = "Luiz";
        header("Location: ../Pages/Dashboard.php");
    } elseif (!empty($user) and !empty($pass)) {

        header("Location: ../Index.php");
    } else { 

        print("Nome/Senha inválidos!");
    }
}
?>
