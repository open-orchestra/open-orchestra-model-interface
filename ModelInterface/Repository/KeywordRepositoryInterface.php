<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\KeywordInterface;
use OpenOrchestra\ModelInterface\Repository\RepositoryTrait\UseTrackableTraitInterface;
use OpenOrchestra\Pagination\Configuration\PaginateFinderConfiguration;

/**
 * Interface KeywordRepositoryInterface
 */
interface KeywordRepositoryInterface extends UseTrackableTraitInterface
{
    /**
     * @param mixed $id The identifier.
     *
     * @return KeywordInterface
     */
    public function find($id);

    /**
     * @return array
     */
    public function findAll();

    /**
     * @return mixed
     */
    public function getManager();

    /**
     * @param string $label
     *
     * @return KeywordInterface
     */
    public function findOneByLabel($label);

    /**
     * @param PaginateFinderConfiguration $configuration
     *
     * @return array
     */
    public function findForPaginate(PaginateFinderConfiguration $configuration);

    /**
     * @param PaginateFinderConfiguration $configuration
     *
     * @return int
     */
    public function countWithFilter(PaginateFinderConfiguration $configuration);

    /**
     * @return int
     */
    public function count();

    /**
     * @param array $keywordIds
     *
     * @throws \Exception
     */
    public function removeKeywords(array $keywordIds);
}
