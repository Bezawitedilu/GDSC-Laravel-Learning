<?php
session_start();

$posts = json_decode(file_get_contents('../data/posts.json'), true);

include('../header.php');
?>

<div class="container mx-auto mt-8 p-8 bg-white rounded-lg shadow-md max-w-md">
    <h2 class="text-2xl font-bold mb-6">All Posts</h2>

    <?php if (!empty($posts)) : ?>
        <ul>
            <?php foreach ($posts as $post) : ?>
                <li>
                    <h3 class="text-lg font-semibold"><?= $post['title']; ?></h3>
                    <p class="text-sm text-gray-600"><?= $post['timestamp']; ?></p>
                    <p><?= $post['content']; ?></p>
                    <p class="text-sm text-gray-700">Author: <?= $post['author']; ?></p>
                    <hr class="my-4">
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else : ?>
        <p>No posts available.</p>
    <?php endif; ?>

</div>

<?php include('../footer.php'); ?>
