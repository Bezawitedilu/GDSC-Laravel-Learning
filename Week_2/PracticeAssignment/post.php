<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 2 PHP project</title>
</head>
<body>
    <h1>Simple Blog Website</h1>
    <br>
    <p>Welcome to my blog site, you can add new blog posts every time, containing texts and titles</p>

    <h5>Old Posts</h5>
    <ul>
        <li><a href="post.php"> Home</a></li>
        <li><a href="newPost.php">New Post</a></li>
    </ul>

    <?php
    $posts = [
        [
            'title' => 'First Post',
            'content' => 'This is the content of the first post.'
        ],
        [
            'title' => 'Second Post',
            'content' => 'This is the content of the second post.',
        ],
        [
            'title' => 'Third Post',
            'content' => 'This is the content of the third post',
        ],
        [
            'title' => 'Fourth Post',
            'content' => 'This is the content of the fourth post',
        ]
    ];

    foreach ($posts as $post) {
        // Check if the 'title' and 'content' keys exist before accessing them
        if (isset($post['title']) && isset($post['content'])) {
            echo "<h3>{$post['title']}</h3>";
            echo "<p>{$post['content']}</p>";
        }
    }

    $postsFile = 'posts.txt';
    $posts = [];

    if (file_exists($postsFile)) {
        $fileContent = file_get_contents($postsFile);
        $postEntries = explode("\n\n", $fileContent);

        foreach ($postEntries as $postEntry) {
            $postLines = explode("\n", $postEntry);

            // Check if the array keys exist before accessing them
            if (isset($postLines[0]) && isset($postLines[1])) {
                $post = [
                    'title' => str_replace('Title: ', '', $postLines[0]),
                    'content' => str_replace('Content: ', '', $postLines[1])
                ];

                $posts[] = $post;
            }
        }
    }
    ?>
</body>
</html>
