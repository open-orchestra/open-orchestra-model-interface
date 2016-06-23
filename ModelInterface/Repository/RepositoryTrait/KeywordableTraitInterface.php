<?php

namespace OpenOrchestra\ModelInterface\Repository\RepositoryTrait;

/**
 * Interface KeywordableTraitInterface
 */
interface KeywordableTraitInterface
{
    const GET_BALANCED_BRACKETS = '/\( ([^\(\)]*) \)/';
    const GET_AND_SUB_BOOLEAN = '/(?:(?: AND )(NOT ){0,1}([^ ]+))/';
    const GET_OR_SUB_BOOLEAN = '/(?:(?: OR )(NOT ){0,1}([^ ]+))/';
    const IS_AND_BOOLEAN = '/^(NOT ){0,1}([^ ]+?)(?:(?: AND (?:NOT ){0,1}[^ ]+?)*)$/';
    const IS_OR_BOOLEAN = '/^(NOT ){0,1}([^ ]+?)(?:(?: OR (?:NOT ){0,1}[^ ]+?)*)$/';
    const OPERATOR_SPLIT = '/ *\( +/|/ +\) */|/ *NOT +/|/ +AND +/|/ +OR +/';

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
