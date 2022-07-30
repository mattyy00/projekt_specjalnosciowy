<?php

namespace App\Controller\Admin;

use App\Entity\Joboffers;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class JoboffersCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Joboffers::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
