<?php

namespace TweedeGolf\GeneratorBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

class BundleNamespaceValidator extends IsNamespaceValidator
{
    public function validate($value, Constraint $constraint)
    {
        parent::validate($value, $constraint);
        // TODO: Change the autogenerated stub
    }
}