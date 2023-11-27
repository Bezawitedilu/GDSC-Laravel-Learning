<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header('Location: ../posts/index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    header('Location: login.php');
    exit();
}

include('../header.php');
?>

<h2>Sign Up</h2>
<form action="" method="POST">
    <label for="username">Username:</label>
    <input type="text" name="username" required>

    <label for="password">Password:</label>
    <input type="password" name="password" required>

    <button type="submit">Sign Up</button>
</form>

<?php include('../footer.php'); ?>
