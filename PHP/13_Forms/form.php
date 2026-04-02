<?php
session_start();

$errors = [];
$name = $email = "";

// CSRF Token
if(empty($_SESSION['token'])){
    $_SESSION['token'] = bin2hex(random_bytes(32));
}

if($_SERVER["REQUEST_METHOD"] == "POST"){

    // CSRF Check
    if($_POST['token'] !== $_SESSION['token']){
        die("Invalid CSRF Token");
    }

    // Sanitize input
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = trim($_POST['password']);

    // Validation
    if(empty($name)){
        $errors[] = "Name is required";
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors[] = "Invalid Email";
    }

    if(strlen($password) < 6){
        $errors[] = "Password must be at least 6 characters";
    }

    if(empty($errors)){
        // Password Hashing
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        echo "<h3 style='color:green'>Form Submitted Successfully</h3>";
        echo "Name: $name <br>Email: $email";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Advanced Form</title>
</head>
<body>

<h2>Register Form</h2>

<?php
if(!empty($errors)){
    foreach($errors as $e){
        echo "<p style='color:red'>$e</p>";
    }
}
?>

<form method="POST">
    <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">

    Name: <input type="text" name="name" value="<?php echo $name; ?>"><br><br>
    Email: <input type="text" name="email" value="<?php echo $email; ?>"><br><br>
    Password: <input type="password" name="password"><br><br>

    <input type="submit" value="Register">
</form>

</body>
</html>