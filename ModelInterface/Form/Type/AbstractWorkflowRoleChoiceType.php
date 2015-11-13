<?php

namespace OpenOrchestra\ModelInterface\Form\Type;

use Symfony\Component\Form\AbstractType;

/**
 * Class AbstractWorkflowRoleChoiceType
 */
abstract class AbstractWorkflowRoleChoiceType extends AbstractType
{
    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'oo_workflow_role_choice';
    }
}
