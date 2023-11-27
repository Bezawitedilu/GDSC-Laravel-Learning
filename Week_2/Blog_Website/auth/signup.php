<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user input from the signup form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate the inputs (you can add more validation logic here)
    if (empty($username) || empty($password)) {
        // Handle validation error (e.g., redirect back to the signup page with an error message)
        header('Location: signup.php?error=Please fill in all fields');
        exit();
    }

    // Read existing user data from the JSON file
    $userData = json_decode(file_get_contents('users.json'), true);

    // Check if the username is already taken
    if (isset($userData[$username])) {
        // Handle username already taken (e.g., redirect back to the signup page with an error message)
        header('Location: signup.php?error=Username already taken');
        exit();
    }

    // Hash the password (make sure to use a strong hashing algorithm)
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Add the new user to the user data array
    $userData[$username] = [
        'username' => $username,
        'password' => $hashedPassword,
    ];

    // Save the updated user data back to the JSON file
    file_put_contents('users.json', json_encode($userData));

    // Redirect to a login page or another appropriate location after successful signup
    header('Location: login.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
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
    <h2 class="text-2xl font-bold mb-6 text-center">Signup</h2>

    <?php
    // Display error message if any
    if (isset($_GET['error'])) {
        echo '<p class="text-red-500 text-center">' . htmlspecialchars($_GET['error']) . '</p>';
    }
    ?>

    <form action="signup.php" method="POST">
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
            Signup
        </button>
    </form>

    <p class="mt-4 text-center text-gray-600">
        Already have an account? <a href="login.php" class="text-indigo-600">Login</a>
    </p>
</div>

</body>
</html>
