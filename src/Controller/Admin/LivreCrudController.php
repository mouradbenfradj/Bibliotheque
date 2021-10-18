<?php

namespace App\Controller\Admin;

use App\Entity\Livre;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class LivreCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Livre::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('titre'),
            TextEditorField::new('description'),
            ImageField::new('image')
            ->setBasePath('uploads/livre/')
            ->setUploadDir('public/uploads/livre')
            ->setUploadedFileNamePattern('[randomhash].[extension]'),
            AssociationField::new('categorie'),
            AssociationField::new('level'),
            AssociationField::new('language'),
            AssociationField::new('auteur'),

        ];
    }
}
