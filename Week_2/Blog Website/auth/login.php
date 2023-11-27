<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header('Location: ../posts/index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'demo' && $password === 'password') {
        $_SESSION['user_id'] = 1;
        header('Location: ../posts/index.php');
        exit();
    } else {
        $error = "Invalid username or password";
    }
}

include('../header.php');
?>

<h2>Login</h2>
<form action="" method="POST">
    <label for="username">Username:</label>
    <input type="text" name="username" required>

    <label for="password">Password:</label>
    <input type="password" name="password" required>

    <button type="submit">Login</button>
</form>

<?php
if (isset($error)) {
    echo "<p class='text-red-500'>$error</p>";
}

include('../footer.php');
?>
