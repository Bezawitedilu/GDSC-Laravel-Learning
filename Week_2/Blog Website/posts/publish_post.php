<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../auth/login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_SESSION['user_id'];
    $timestamp = date('Y-m-d H:i:s');

    $posts = json_decode(file_get_contents('../data/posts.json'), true);

    $newPost = array(
        'title' => $title,
        'content' => $content,
        'author' => $author,
        'timestamp' => $timestamp
    );

    $posts[] = $newPost;

    file_put_contents('../data/posts.json', json_encode($posts));

    header('Location: index.php');
    exit();
}

include('../header.php');
?>

<h2>Publish Post</h2>


<?php include('../footer.php'); ?>
