<?php

namespace OpenOrchestra\ModelInterface\Form\Type;

use Symfony\Component\Form\AbstractType;

/**
 * Class AbstractStatusChoiceType
 */
abstract class AbstractStatusChoiceType extends AbstractType
{
    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'oo_status_choice';
    }
}
