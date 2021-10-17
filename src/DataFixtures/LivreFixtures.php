<?php

namespace App\DataFixtures;

use App\Entity\Livre;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LivreFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $livre = new Livre();
        $livre->setTitre('User Research for User Experience Design');
        $livre->setDescription('The Museum of Modern Art');
        $livre->setImage('build/images/gallery/design.png');
        $livre->setAuteur($this->getReference(AppFixtures::AUTEUR_REFERENCE));
        $livre->setCategorie($this->getReference(AppFixtures::CATEGORIE_WEB_REFERENCE));
        $livre->setLanguage($this->getReference(AppFixtures::LANGUE_EN_REFERENCE));
        $livre->setLevel($this->getReference(AppFixtures::LEVEL_L1_REFERENCE));
        $manager->persist($livre);

        $livre = new Livre();
        $livre->setTitre('Buddhism and Modern Psychology');
        $livre->setDescription('The Museum of Modern Art');
        $livre->setImage('build/images/gallery/psychology.png');
        $livre->setAuteur($this->getReference(AppFixtures::AUTEUR_REFERENCE));
        $livre->setCategorie($this->getReference(AppFixtures::CATEGORIE_WEB_REFERENCE));
        $livre->setLanguage($this->getReference(AppFixtures::LANGUE_EN_REFERENCE));
        $livre->setLevel($this->getReference(AppFixtures::LEVEL_L1_REFERENCE));
        $manager->persist($livre);

        $livre = new Livre();
        $livre->setTitre('Introduction to Philosophy');
        $livre->setDescription('Duke University');
        $livre->setImage('build/images/gallery/philosophy.png');
        $livre->setAuteur($this->getReference(AppFixtures::AUTEUR_REFERENCE));
        $livre->setCategorie($this->getReference(AppFixtures::CATEGORIE_WEB_REFERENCE));
        $livre->setLanguage($this->getReference(AppFixtures::LANGUE_EN_REFERENCE));
        $livre->setLevel($this->getReference(AppFixtures::LEVEL_L1_REFERENCE));
        $manager->persist($livre);

        $livre = new Livre();
        $livre->setTitre('Advance on Seeing Through Photographs');
        $livre->setDescription('Duke University');
        $livre->setImage('build/images/gallery/photographs.png');
        $livre->setAuteur($this->getReference(AppFixtures::AUTEUR_REFERENCE));
        $livre->setCategorie($this->getReference(AppFixtures::CATEGORIE_WEB_REFERENCE));
        $livre->setLanguage($this->getReference(AppFixtures::LANGUE_EN_REFERENCE));
        $livre->setLevel($this->getReference(AppFixtures::LEVEL_L1_REFERENCE));
        $manager->persist($livre);

        $livre = new Livre();
        $livre->setTitre('Think Again I: How to Understand Arguments');
        $livre->setDescription('The Museum of Modern Art');
        $livre->setImage('build/images/gallery/arguments.png');
        $livre->setAuteur($this->getReference(AppFixtures::AUTEUR_REFERENCE));
        $livre->setCategorie($this->getReference(AppFixtures::CATEGORIE_WEB_REFERENCE));
        $livre->setLanguage($this->getReference(AppFixtures::LANGUE_EN_REFERENCE));
        $livre->setLevel($this->getReference(AppFixtures::LEVEL_L1_REFERENCE));
        $manager->persist($livre);

        $livre = new Livre();
        $livre->setTitre('User Research for User Experience Design');
        $livre->setDescription('The Museum of Modern Art');
        $livre->setImage('build/images/gallery/experience-design.png');
        $livre->setAuteur($this->getReference(AppFixtures::AUTEUR_REFERENCE));
        $livre->setCategorie($this->getReference(AppFixtures::CATEGORIE_WEB_REFERENCE));
        $livre->setLanguage($this->getReference(AppFixtures::LANGUE_EN_REFERENCE));
        $livre->setLevel($this->getReference(AppFixtures::LEVEL_L1_REFERENCE));
        $manager->persist($livre);

        $livre = new Livre();
        $livre->setTitre('User Research for User Experience Design');
        $livre->setDescription('The Museum of Modern Art');
        $livre->setImage('build/images/gallery/user-research.png');
        $livre->setAuteur($this->getReference(AppFixtures::AUTEUR_REFERENCE));
        $livre->setCategorie($this->getReference(AppFixtures::CATEGORIE_WEB_REFERENCE));
        $livre->setLanguage($this->getReference(AppFixtures::LANGUE_EN_REFERENCE));
        $livre->setLevel($this->getReference(AppFixtures::LEVEL_L1_REFERENCE));
        $manager->persist($livre);

        $livre = new Livre();
        $livre->setTitre('Introduction to Logic and Critical Thinking');
        $livre->setDescription('Duke University');
        $livre->setImage('build/images/gallery/critical-thinking.png');
        $livre->setAuteur($this->getReference(AppFixtures::AUTEUR_REFERENCE));
        $livre->setCategorie($this->getReference(AppFixtures::CATEGORIE_WEB_REFERENCE));
        $livre->setLanguage($this->getReference(AppFixtures::LANGUE_EN_REFERENCE));
        $livre->setLevel($this->getReference(AppFixtures::LEVEL_L1_REFERENCE));
        $manager->persist($livre);

        $livre = new Livre();
        $livre->setTitre('Modern and Contemporary Art and Design');
        $livre->setDescription('The Museum of Modern Art');
        $livre->setImage('build/images/gallery/art-design.png');
        $livre->setAuteur($this->getReference(AppFixtures::AUTEUR_REFERENCE));
        $livre->setCategorie($this->getReference(AppFixtures::CATEGORIE_WEB_REFERENCE));
        $livre->setLanguage($this->getReference(AppFixtures::LANGUE_EN_REFERENCE));
        $livre->setLevel($this->getReference(AppFixtures::LEVEL_L1_REFERENCE));
        $manager->persist($livre);

        $manager->flush();
    }
}
