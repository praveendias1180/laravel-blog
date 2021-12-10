<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app.css">
    <title><?= $post->title; ?></title>
</head>
<body>
    <article>
        <h1><a href="post"><?= $post->title; ?></a></h1> 
        <?= $post->body(); ?>
    </article>
    <a href="/">Go back</a>
    
</body>
</html>