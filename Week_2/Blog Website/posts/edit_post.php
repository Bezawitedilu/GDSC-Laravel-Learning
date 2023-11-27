<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../login.php');
    exit();
}

include('../header.php');
?>

<h2>Edit Post</h2>


<?php include('../footer.php'); ?>
