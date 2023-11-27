<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../auth/login.php');
    exit();
}

include('../header.php');
?>

<div class="container mx-auto mt-8 p-8 bg-white rounded-lg shadow-md max-w-md">
    <h2 class="text-2xl font-bold mb-6">Edit Post</h2>

</div>

<?php include('../footer.php'); ?>
