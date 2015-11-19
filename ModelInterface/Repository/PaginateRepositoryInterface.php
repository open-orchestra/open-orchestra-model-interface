<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\Pagination\Configuration\PaginateFinderConfiguration;
use OpenOrchestra\Pagination\Configuration\FinderConfiguration;

/**
 * Interface PaginateRepositoryInterface
 *
 * @deprecated use PaginationRepositoryInterface, will be removed in 1.2.0
 */
interface PaginateRepositoryInterface
{
    /**
     * @param PaginateFinderConfiguration $configuration
     *
     * @return array
     */
    public function findForPaginate(PaginateFinderConfiguration $configuration);

    /**
     * @param FinderConfiguration $configuration
     *
     * @return int
     */

    public function countWithFilter(FinderConfiguration $configuration);

    /**
     * @return int
     */
    public function count();
}
