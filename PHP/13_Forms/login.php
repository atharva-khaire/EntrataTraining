<?php
session_start();

// Dummy stored user (normally DB me hota hai)
$storedUser = "admin";
$storedHash = password_hash("1234", PASSWORD_DEFAULT);

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $user = htmlspecialchars($_POST['user']);
    $pass = $_POST['pass'];

    if($user === $storedUser && password_verify($pass, $storedHash)){
        $_SESSION['user'] = $user;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "<p style='color:red'>Invalid Credentials</p>";
    }
}
?>

<form method="POST">
    Username: <input type="text" name="user"><br><br>
    Password: <input type="password" name="pass"><br><br>
    <input type="submit" value="Login">
</form>