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

    <article>
        <h1><?= $post->title ?></h1>
        <p><em>{{ $post->date }}</em></p>
        <div>
            <?= $post->body ?>
        </div>
    </article>
    <a href="/">Go back</a>
</body>
</html>