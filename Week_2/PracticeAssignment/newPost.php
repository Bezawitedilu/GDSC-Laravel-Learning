<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>New post</h1>

    <form action="newPost.php" method="post">
        <label for="title">Title:</label>
        <input type="text" name="title" required>

        <label for="content">Content:</label>
        <textarea name="content" rows="4" required></textarea>

        <input type="submit" value="Publish">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $newPost = [
            'title' => $_POST["title"],
            'content' => $_POST["content"],
        ];

        $posts[] = $newPost;

        echo "<p>Post published successfully!</p>";
    }

    ?>
    <ul>
        <a href="post.php">Go back and see what you have published</a>
    </ul>
</body>
</html>