<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get user input from the login form
    $username = $_POST['username'];
    $enteredPassword = $_POST['password'];

    // Read existing user data from the JSON file
    $userData = json_decode(file_get_contents('users.json'), true);

    // Check if the username exists
    if (isset($userData[$username])) {
        // Verify the entered password
        $storedHashedPassword = $userData[$username]['password'];

        // Trim the entered password
        $enteredPassword = trim($enteredPassword);

        if (password_verify($enteredPassword, $storedHashedPassword)) {
            // Password is correct
            // Perform login actions
            $_SESSION['username'] = $username; // Store the username in the session, for example
            header('index.php'); // Redirect to the index or another appropriate location
            exit();
        } else {
            // Incorrect password
            // Display an error message
            header('Location: login.php?error=Incorrect password');
            exit();
        }
    } else {
        // Username does not exist
        // Display an error message 
        header('Location: login.php?error=User not found');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100">

<!-- Navigation Bar -->
<nav class="bg-indigo-600 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="#" class="text-xl font-bold">Bezawit's Blog</a>
        <div>
            <a href="login.php" class="mx-2">Login</a>
            <a href="signup.php" class="mx-2">Signup</a>
        </div>
    </div>
</nav>

<div class="container mx-auto mt-8 p-8 bg-white rounded-lg shadow-md max-w-md">
    <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>

    <?php
    // Display error message if any
    if (isset($_GET['error'])) {
        echo '<p class="text-red-500 text-center">' . htmlspecialchars($_GET['error']) . '</p>';
    }
    ?>

    <form action="login.php" method="POST">
        <div class="mb-4">
            <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
            <input type="text" id="username" name="username" required
                   class="mt-1 p-2 border rounded-md w-full focus:outline-none focus:border-indigo-500">
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" id="password" name="password" required
                   class="mt-1 p-2 border rounded-md w-full focus:outline-none focus:border-indigo-500">
        </div>

        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md w-full hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo">
            Login
        </button>
    </form>

    <p class="mt-4 text-center text-gray-600">
        Don't have an account? <a href="signup.php" class="text-indigo-600">Signup</a>
    </p>
</div>

</body>
</html>
