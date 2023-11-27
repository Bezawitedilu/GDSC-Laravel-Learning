<?php
session_start();

$posts = json_decode(file_get_contents('../data/posts.json'), true);

include('../header.php');
?>

<div class="container mx-auto mt-8 p-8 bg-white rounded-lg shadow-md max-w-md">
    <h2 class="text-2xl font-bold mb-6">All Posts</h2>

    <!-- Add buttons for adding, updating, and deleting posts -->
    <div class="flex justify-between mb-4">
        <a href="publish_post.php" class="bg-indigo-600 text-white px-4 py-2 rounded-md">Add Post</a>
    </div>

    <!-- Container to display posts dynamically using AJAX -->
    <div id="postContainer">
        <?php
        // Display each post with an edit and delete button
        foreach ($posts as $index => $post) {
            echo "<div class='mb-4'>";
            echo "<h3 class='text-lg font-semibold'>$post[title]</h3>";
            echo "<p class='text-gray-500'>$post[timestamp]</p>";
            echo "<p>$post[content]</p>";
            
            // Add buttons for edit and delete with the corresponding post index
            echo "<a href='edit_post.php?postIndex=$index' class='text-indigo-600 hover:text-indigo-500'>Edit</a>";
            echo "<a href='delete_post.php?postIndex=$index' class='text-red-600 hover:text-red-500 ml-2'>Delete</a>";
            
            echo "</div>";
        }
        ?>
    </div>

</div>

<?php include('../footer.php'); ?>
