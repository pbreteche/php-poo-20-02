<?php

class HTMLFormatter
{
    public function format($article)
    {
        ob_start(); // capture de toute écriture dans le document
        include __DIR__ . '/../template/article.html.php';
        return ob_get_clean(); // récupère le contenu puis vide le tampon de sortie
    }
}
