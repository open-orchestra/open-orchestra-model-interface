<?php

namespace OpenOrchestra\ModelInterface\Repository\RepositoryTrait;

/**
 * Interface KeywordableTraitInterface
 */
interface KeywordableTraitInterface
{
    const GET_BALANCED_BRACKETS = '/\( ([^\(\)]*) \)/';
    const GET_AND_SUB_BOOLEAN = '/(NOT (?=.)){0,1}([^ \(\)]+)( AND (?=.)){0,1}/';
    const GET_OR_SUB_BOOLEAN = '/(NOT (?=.)){0,1}([^ \(\)]+)( OR (?=.)){0,1}/';
    const IS_AND_BOOLEAN = '/^((NOT (?=.)){0,1}[^ \(\)]+( AND (?=.)){0,1})+$/';
    const IS_OR_BOOLEAN = '/^((NOT (?=.)){0,1}[^ \(\)]+( OR (?=.)){0,1})+$/';

    public static $OPERATOR_SPLIT = array('/ *\( +/', '/ +\) */', '/ *NOT +/', '/ +AND +/', '/ +OR +/');

    /**
     * @param string $condition
     * @param int    $count
     * @param array  $aliases
     * @param string $delimiter
     *
     * @return string|null
     */
    public function transformConditionToMongoCondition($condition, $count = 0, array $aliases = array(), $delimiter = '##');

    /**
     * @param string $condition
     * @param array  $aliases
     *
     * @return array
     *
     * @throws TransformationFailedException
     */
    public function transformSubConditionToMongoCondition($condition, array &$aliases);
}
