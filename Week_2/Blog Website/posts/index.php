<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../auth/login.php');
    exit();
}

include('../header.php');
?>

<h1>Welcome to Bezawit's Blog</h1>
<!-- Display blog posts from JSON file -->

<?php include('../footer.php'); ?>
