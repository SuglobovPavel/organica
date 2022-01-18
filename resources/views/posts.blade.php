<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My blog</title>
    <link rel="stylesheet" href="/app.css">
    <script src="/script.js"></script>
</head>
<body>
    <h1>My blog</h1>
    <?php foreach($posts as $post): ?>
    <article>
        <h2><?= $post->title ?></h2>
        <p><?= $post->excerpt ?></p>
        <a href="/posts/<?= $post->slug ?>">Read more</a>
    </article>
    <?php endforeach ?>
</body>
</html>