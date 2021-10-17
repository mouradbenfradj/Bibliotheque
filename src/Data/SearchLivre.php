<?php

namespace App\Date;

use App\Entity\Auteur;
use App\Entity\Categorie;
use App\Entity\Language;
use App\Entity\Level;

class SearchLivre
{
    /**
     * page
     *
     * @var int
     */
    public $page = 1;
    /**
     * titre
     *
     * @var string
     */
    public $titre;
    /**
     * categories
     *
     * @var Categorie[]
     */
    public $categories;
    /**
     * levels
     *
     * @var Level
     */
    public $levels;
    /**
     * languages
     *
     * @var Language[]
     */
    public $languages;
    /**
     * auteurs
     *
     * @var Auteur
     */
    public $auteurs;
}
