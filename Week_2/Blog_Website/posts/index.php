<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../auth/login.php');
    exit();
}

include('../header.php');
?>

<div class="container mx-auto mt-8 p-8 bg-white rounded-lg shadow-md">
    <h1 class="text-3xl font-bold mb-6">Welcome to Bezawit's Blog</h1>

    <!-- Display blog posts from JSON file -->
    <!-- You can use PHP to fetch and display posts here -->

</div>

<?php include('../footer.php'); ?>
