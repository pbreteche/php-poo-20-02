<?php

class ArticleProvider
{
    private $articles;

    public function __construct()
    {
        $this->articles = include 'article_list.php';
        $this->articles = json_decode(file_get_contents('article_list.json'), true);
    }

    public function getArticle(string $slug)
    {
        foreach($this->articles as $article) {
            if ($article['slug'] == $slug) {
                return $article;
            }
        }
        http_response_code(404);
        return [
            'title' => 'Article non-trouvé',
            'content' => 'Merci de retourner à la page d\'accueil',
        ];
    }
}
