<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog</title>
</head>
<body>
    <header>
        <h1>Simple Blog</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="new_post.php">New Post</a></li>
        </ul>
    </nav>
    <main>

    <h2>Recent Posts</h2>

    <?php
    $posts = [
        [
            'title' => 'First Post',
            'content' => 'This is the content of the first post.',
            'image_url' => 'https://placekitten.com/300/200',
            'pub_date' => '2023-01-01 12:00:00'
        ],
        [
            'title' => 'Second Post',
            'content' => 'This is the content of the second post.',
            'image_url' => 'https://placekitten.com/300/200',
            'pub_date' => '2023-02-01 14:30:00'
        ],
        // Add more posts as needed
    ];

    foreach ($posts as $post) {
        echo "<article>";
        echo "<h3>{$post['title']}</h3>";
        echo "<p class='pub-date'>{$post['pub_date']}</p>";
        echo "<p>{$post['content']}</p>";

        if (!empty($post['image_url'])) {
            echo "<img src='{$post['image_url']}' alt='Post Image'>";
        }

        echo "</article>";
    }
    ?>

    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Simple Blog</p>
    </footer>
</body>
</html>
