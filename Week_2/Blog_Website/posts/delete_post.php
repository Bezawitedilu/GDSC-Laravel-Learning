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
    <h2 class="text-2xl font-bold mb-6">Delete Post</h2>
    <p class="text-lg text-gray-700 mb-4">Are you sure you want to delete the post titled "<?= $post['title']; ?>"?</p>
    
    <!-- Form for deleting a post -->
    <form id="deletePostForm" action="" method="POST">
        <input type="hidden" name="postIndex" value="<?= $postIndex; ?>">

        <button type="submit" class="bg-red-600 text-white p-2 rounded-md">Delete Post</button>
    </form>

    <!-- Link to go back to the list of posts -->
    <a href="index.php" class="text-indigo-600 hover:text-indigo-500">Back to All Posts</a>
</div>

<script>
  // AJAX to submit the form without refreshing the page
  document.getElementById('deletePostForm').addEventListener('submit', function (event) {
    event.preventDefault();
    var formData = new FormData(this);

    // AJAX request to handle form submission
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'delete_post.php', true);
    xhr.onload = function () {
      if (xhr.status === 200) {
        // Redirect to the list of posts after successful deletion
        window.location.href = 'index.php';
      } else {
        console.error('Error deleting post');
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
