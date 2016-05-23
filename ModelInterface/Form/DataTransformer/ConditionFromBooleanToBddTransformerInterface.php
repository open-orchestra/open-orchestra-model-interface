<?php

namespace OpenOrchestra\ModelInterface\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;

/**
 * Class ConditionFromBooleanToBddTransformer
 */
interface ConditionFromBooleanToBddTransformerInterface extends DataTransformerInterface
{
    const GET_BALANCED_BRACKETS = '/\( ([^\(\)]*) \)/';
    const GET_AND_SUB_BOOLEAN = '/(NOT (?=.)){0,1}([^ \(\)]+)( AND (?=.)){0,1}/';
    const GET_OR_SUB_BOOLEAN = '/(NOT (?=.)){0,1}([^ \(\)]+)( OR (?=.)){0,1}/';
    const IS_AND_BOOLEAN = '/^((NOT (?=.)){0,1}[^ \(\)]+( AND (?=.)){0,1})+$/';
    const IS_OR_BOOLEAN = '/^((NOT (?=.)){0,1}[^ \(\)]+( OR (?=.)){0,1})+$/';

    /**
     * @param string $field
     */
    public function setField($field);
}
