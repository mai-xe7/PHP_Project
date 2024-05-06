<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    
    if ($username === "your_username" && $password === "your_password") {
        
        echo "Welcome, $username!";
        
    } else {
        
        echo "Invalid username or password. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <main>
        <form action="login.php" method="post">
            <h1>Login</h1>
            <div>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            </div>
            <section>
                <button type="submit">Login</button>
                <a href="register.php">Register</a>
            </section>
        </form>
    </main>
</body>
</html>
