<?php

namespace App\Controller\Admin;

use App\Entity\CourseBenefits;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CourseBenefitsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CourseBenefits::class;
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
