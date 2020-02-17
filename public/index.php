<?php

require_once __DIR__.'/../src/ArticleProvider.php';
require_once __DIR__.'/../src/HTMLFormatter.php';

$provider = new ArticleProvider();
$article = $provider->getArticle($_SERVER['REQUEST_URI']);

$formatter = new HTMLFormatter();
$document = $formatter->format($article);

echo $document;
