<?php

namespace App\Controller\Admin;

use App\Entity\Signup;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SignupCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Signup::class;
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
