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
    }

 
