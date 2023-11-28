<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../auth/login.php');
    exit();
}

if (isset($_GET['postIndex'])) {
    $postIndex = $_GET['postIndex'];
    $posts = json_decode(file_get_contents('../data/posts.json'), true);

    if (isset($posts[$postIndex])) {
        $post = $posts[$postIndex];

        include('../header.php');
?>

<div class="container mx-auto mt-8 p-8 bg-white rounded-lg shadow-md max-w-md">
    <h2 class="text-2xl font-bold mb-6">Edit Post</h2>
    <!-- Form for editing a post -->
    <form id="editPostForm" action="" method="POST">
        <input type="hidden" name="postIndex" value="<?= $postIndex; ?>">

        <label for="title" class="block text-sm font-medium text-gray-700">Title:</label>
        <input type="text" name="title" value="<?= $post['title']; ?>" required class="mt-1 p-2 w-full border rounded-md">

        <label for="content" class="block mt-4 text-sm font-medium text-gray-700">Content:</label>
        <textarea name="content" rows="4" required class="mt-1 p-2 w-full border rounded-md"><?= $post['content']; ?></textarea>

        <button type="submit" class="mt-4 bg-indigo-600 text-white p-2 rounded-md">Update Post</button>
    </form>

    <!-- Link to go back to the list of posts -->
    <a href="index.php" class="text-indigo-600 hover:text-indigo-500">Back to All Posts</a>
</div>

<script>
  // AJAX to submit the form without refreshing the page
  document.getElementById('editPostForm').addEventListener('submit', function (event) {
    event.preventDefault();
    var formData = new FormData(this);

    // AJAX request to handle form submission
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'edit_post.php', true);
    xhr.onload = function () {
      if (xhr.status === 200) {
        // Redirect to the list of posts after successful update
        window.location.href = 'index.php';
      } else {
        console.error('Error updating post');
      }
    };
    xhr.send(formData);
  });
</script>

<?php
        include('../footer.php');
        exit();
    }
}

// If the post index is not valid, redirect to the list of posts
header('Location: index.php');
exit();
?>
