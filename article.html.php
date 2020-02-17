<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= htmlspecialchars($article['title']) ?></title>
</head>
<body>
<h1><?= htmlspecialchars($article['title']) ?></h1>
<div><?= htmlspecialchars($article['content']) ?></div>
</body>
</html>