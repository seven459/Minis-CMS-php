gi<?php

class ArticleManager {
    private array $articles = [];
    private int $nextId = 1;

    public function ajouterArticle(string $titre, string $contenu): array {
        $article = [
            'id'      => $this->nextId++,
            'titre'   => $titre,
            'contenu' => $contenu,
        ];

        $this->articles[] = $article;

        return $article;
    }
}
public function supprimer ($id)}
foreach($this->articles as $key=>$id){
    if($article['id']===$id){
        unset($this->articles[$key]);
        return true;
    }
}
return false;
}