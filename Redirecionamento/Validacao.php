<?php
session_start();

if (!isset($_SESSION["user_type"])) {
    $_SESSION["user_type"] = "";
}

$userType = $_SESSION["user_type"];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = isset($_POST["user"]) ? $_POST["user"] : "";
    $pass = isset($_POST["pass"]) ? $_POST["pass"] : "";

    if ($user == "Igor" and $pass == "123") {
        $_SESSION["user_type"] = "Igor";
        header("Location: ../Pages/Dashboard.php");
        exit(); 
    } elseif ($user == "Luiz" and $pass == "123") {
        $_SESSION["user_type"] = "Luiz";
        header("Location: ../Pages/Dashboard.php");
        exit(); 
    } elseif (!empty($user) and !empty($pass)) {
        header("Location: ../Index.php");
        exit();
    } else {
        print("Nome/Senha inválidos!");
    }
}

?>
