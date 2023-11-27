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

<div class="container mx-auto mt-8 p-8 bg-white rounded-lg shadow-md max-w-md">
    <h2 class="text-2xl font-bold mb-6">Create Post</h2>
    <!-- Form for creating a new post -->
    <form action="" method="POST">
        <label for="title" class="block text-sm font-medium text-gray-700">Title:</label>
        <input type="text" name="title" required class="mt-1 p-2 w-full border rounded-md">

        <label for="content" class="block mt-4 text-sm font-medium text-gray-700">Content:</label>
        <textarea name="content" rows="4" required class="mt-1 p-2 w-full border rounded-md"></textarea>

        <button type="submit" class="mt-4 bg-indigo-600 text-white p-2 rounded-md">Create Post</button>
    </form>
</div>

<?php include('../footer.php'); ?>
gi a