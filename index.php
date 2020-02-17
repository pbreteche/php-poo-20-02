<?php

require_once 'ArticleProvider.php';
require_once 'HTMLFormatter.php';

$provider = new ArticleProvider();
$article = $provider->getArticle();

$formatter = new HTMLFormatter();
$document = $formatter->format($article);

echo $document;
