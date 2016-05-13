<?php

namespace OpenOrchestra\ModelInterface\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;

/**
 * Class ConditionFromBooleanToBddTransformer
 */
interface ConditionFromBooleanToBddTransformerInterface extends DataTransformerInterface
{
    /**
     * @param string $field
     */
    public function setField($field);
}
