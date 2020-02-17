<?php

class ArticleProvider
{

    public function getArticle()
    {
        if ($_SERVER['REQUEST_URI'] === '/premier-article') {
            return 'Mon premier article';
        }
        http_response_code(404);
        return 'Article non-trouvé';
    }
}
