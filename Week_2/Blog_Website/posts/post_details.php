<?php

$posts = json_decode(file_get_contents('data/posts.json'), true);


if (isset($_GET['id'])) {
    $postId = $_GET['id'];

    
    $selectedPost = array_filter($posts, function ($post) use ($postId) {
        return $post['id'] == $postId;
    });

    if (!empty($selectedPost)) {
        $selectedPost = reset($selectedPost); 

        // Displ
        echo '<h1>' . htmlspecialchars($selectedPost['title']) . '</h1>';
        echo '<p>' . nl2br(htmlspecialchars($selectedPost['content'])) . '</p>';
        echo '<p>Author: ' . htmlspecialchars($selectedPost['author']) . '</p>';
        echo '<p>Timestamp: ' . htmlspecialchars($selectedPost['timestamp']) . '</p>';
    
        echo '<p><a href="index.php">Back to Posts</a></p>';
    }
} else {
    echo 'Invalid request.';
}
?>
