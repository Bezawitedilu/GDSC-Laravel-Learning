<?php
session_start();

// if (!isset($_SESSION['user_id'])) {
//     header('Location: ../auth/login.php');
//     exit();
// }

if (isset($_GET['postIndex'])) {
    $postIndex = $_GET['postIndex'];
    $posts = json_decode(file_get_contents('../data/posts.json'), true);

    if (isset($posts[$postIndex])) {
        $post = $posts[$postIndex];

        include('../header.php');
?>

<div class="container mx-auto mt-8 p-8 bg-white rounded-lg shadow-md max-w-md">
    <h2 class="text-2xl font-bold mb-6"><?= $post['title']; ?></h2>
    <p class="text-sm text-gray-600"><?= $post['timestamp']; ?></p>
    <p><?= $post['content']; ?></p>
    <p class="text-sm text-gray-700">Author: <?= $post['author']; ?></p>
    <hr class="my-4">

    <!-- Button to go back to the list of posts -->
    <a href="index.php" class="text-indigo-600 hover:text-indigo-500">Back to All Posts</a>
</div>

<?php
        include('../footer.php');
        exit();
    }
}

// If the post index is not valid, redirect to the list of posts
header('Location: index.php');
exit();
?>
