<?php
session_start();

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    // CHANGE THESE
    if ($username === "admin" && $password === "admin123") {
        $_SESSION["logged_in"] = true;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Invalid login";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
</head>
<body>
  <h2>Admin Login</h2>
  <?php if ($error) echo "<p style='color:red'>$error</p>"; ?>
  <form method="post">
    <input type="text" name="username" placeholder="Username" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit">Login</button>
  </form>
</body>
</html>
