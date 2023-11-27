<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header('Location: ../posts/index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // For testing purposes, let's print the entered values
    echo "Entered username: $username <br>";
    echo "Entered password: $password <br>";

    // For testing purposes, hardcoded values
    if ($username === 'demo' && $password === 'password') {
        $_SESSION['user_id'] = 1;
        header('Location: ../posts/index.php');
        exit();
    } else {
        $error = "Incorrect username or password";
    }
}

include('../header.php');
?>

<div class="container mx-auto mt-8 p-8 bg-white rounded-lg shadow-md max-w-md">
    <h2 class="text-2xl font-bold mb-6">Login</h2>
    <form action="" method="POST">
        <label for="username" class="block text-sm font-medium text-gray-700">Username:</label>
        <input type="text" name="username" required class="mt-1 p-2 w-full border rounded-md">

        <label for="password" class="block mt-4 text-sm font-medium text-gray-700">Password:</label>
        <input type="password" name="password" required class="mt-1 p-2 w-full border rounded-md">

        <button type="submit" class="mt-4 bg-indigo-600 text-white p-2 rounded-md">Login</button>
    </form>

    <?php
    if (isset($error)) {
        echo "<p class='mt-4 text-red-500'>$error</p>";
    }
    ?>

</div>

<?php include('../footer.php'); ?>
