<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bezawit's Blog</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <header class="bg-indigo-600 text-white p-4">
        <div class="container mx-auto flex justify-between">
            <a href="index.php" class="text-2xl font-bold">Bezawit's Blog</a>
            <nav>
                <?php if (isset($_SESSION['user_id'])) : ?>
                    <a href="posts/index.php" class="mx-2">Home</a>
                    <a href="posts/publish_post.php" class="mx-2">Publish Post</a>
                    <a href="auth/logout.php" class="mx-2">Logout</a>
                <?php else : ?>
                    <a href="auth/login.php" class="mx-2">Login</a>
                    <a href="auth/signup.php" class="mx-2">Sign Up</a>
                <?php endif; ?>
                <a href="about.php" class="mx-2">About</a>
                <a href="contact.php" class="mx-2">Contact</a>
            </nav>
        </div>
    </header>
    <main class="container mx-auto mt-8 p-8">
