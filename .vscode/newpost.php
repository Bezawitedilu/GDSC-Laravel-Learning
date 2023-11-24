<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Post</title>
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

    <h2>New Post</h2>

    <form action="new_post.php" method="post">
        <label for="title">Title:</label>
        <input type="text" name="title" required>

        <label for="content">Content:</label>
        <textarea name="content" rows="4" required></textarea>

        <label for="image_url">Image URL (optional):</label>
        <input type="text" name="image_url">

        <input type="submit" value="Publish">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $newPost = [
            'title' => $_POST["title"],
            'content' => $_POST["content"],
            'image_url' => $_POST["image_url"],
            'pub_date' => date("Y-m-d H:i:s")
        ];

        // Add the new post to the array
        $posts[] = $newPost;

        // Display a success message
        echo "<p>Post published successfully!</p>";
    }
    ?>

    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Simple Blog</p>
    </footer>
</body>
</html>
