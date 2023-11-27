<?php
// Separate file to load posts dynamically
$posts = json_decode(file_get_contents('../data/posts.json'), true);

if (!empty($posts)) {
    echo '<ul>';
    foreach ($posts as $post) {
        echo '<li>';
        echo '<h3 class="text-lg font-semibold">' . $post['title'] . '</h3>';
        echo '<p class="text-sm text-gray-600">' . $post['timestamp'] . '</p>';
        echo '<p>' . $post['content'] . '</p>';
        echo '<p class="text-sm text-gray-700">Author: ' . $post['author'] . '</p>';
        echo '<hr class="my-4">';
        echo '</li>';
    }
    echo '</ul>';
} else {
    echo '<p>No posts available.</p>';
}
?>
