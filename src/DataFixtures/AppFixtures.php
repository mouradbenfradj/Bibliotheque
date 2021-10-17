<?php

namespace App\DataFixtures;

use App\Entity\Auteur;
use App\Entity\Categorie;
use App\Entity\Language;
use App\Entity\Level;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public const CATEGORIE_WEB_REFERENCE = 'web-categorie';
    public const CATEGORIE_UI_REFERENCE = 'ui-categorie';
    public const LEVEL_L1_REFERENCE = 'l1-level';
    public const LEVEL_L2_REFERENCE = 'l2-level';
    public const LANGUE_EN_REFERENCE = 'en-language';
    public const AUTEUR_REFERENCE = 'auteur';

    public function load(ObjectManager $manager)
    {
        $categorieWeb = new Categorie();
        $categorieWeb->setName('Web Development');
        $manager->persist($categorieWeb);

        $categorieUX = new Categorie();
        $categorieUX->setName('UX Designer');
        $manager->persist($categorieUX);

        $level1 = new Level();
        $level1->setLevel('Level 1');
        $manager->persist($level1);
        $level2 = new Level();
        $level2->setLevel('Level 2');
        $manager->persist($level2);
        $level = new Level();
        $level->setLevel('Level 3');
        $manager->persist($level);

        $languageEn = new Language();
        $languageEn->setLng('English');
        $manager->persist($languageEn);
        $language = new Language();
        $language->setLng('Bangla');
        $manager->persist($language);
        $language = new Language();
        $language->setLng('Hindi');
        $manager->persist($language);

        
        $auteur = new Auteur();
        $auteur->setName('All instructeur');
        $manager->persist($auteur);
        $manager->flush();
        $this->addReference(self::CATEGORIE_WEB_REFERENCE, $categorieWeb);
        $this->addReference(self::CATEGORIE_UI_REFERENCE, $categorieUX);
        $this->addReference(self::LEVEL_L1_REFERENCE, $level1);
        $this->addReference(self::LEVEL_L2_REFERENCE, $level2);
        $this->addReference(self::LANGUE_EN_REFERENCE, $languageEn);
        $this->addReference(self::AUTEUR_REFERENCE, $auteur);
    }
}
