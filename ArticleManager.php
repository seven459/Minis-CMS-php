<?php
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
    }
    public function modifierArticle($id, $donnees) {
        return $donnees;
        }

    public function supprimerArticle($id) {
        foreach ($this->articles as $key => $article) {
            if ($article['id'] == $id) {
                unset($this->articles[$key]);
                $this->articles = array_values($this->articles);
                return true;
            }
        }
         return false;
   }
}


 
