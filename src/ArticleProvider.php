<?php

class ArticleProvider
{
    public const HTTP_NOT_FOUND = 404;
    private $articles;

    public function __construct()
    {
        $this->articles = json_decode(file_get_contents( __DIR__.'/../data/article_list.json'), true);
        $this->articles = include __DIR__.'/../data/article_list.php';
    }

    public function getArticle(string $slug)
    {
        foreach($this->articles as $article) {
            if ($article['slug'] == $slug) {
                return $article;
            }
        }
        http_response_code(self::HTTP_NOT_FOUND);
        return [
            'title' => 'Article non-trouvé',
            'content' => 'Merci de retourner à la page d\'accueil',
        ];
    }
}
