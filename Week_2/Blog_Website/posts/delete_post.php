<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../auth/login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $postIndex = $_POST['postIndex'];

    $posts = json_decode(file_get_contents('../data/posts.json'), true);

    // Remove the selected post
    array_splice($posts, $postIndex, 1);

    // Write the updated JSON back to the file
    file_put_contents('../data/posts.json', json_encode($posts));

    // Redirect to the list of posts after successful deletion
    header('Location: index.php');
    exit();
}
?>
