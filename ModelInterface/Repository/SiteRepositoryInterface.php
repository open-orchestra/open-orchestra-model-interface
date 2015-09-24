<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\Pagination\Configuration\FinderConfiguration;
use OpenOrchestra\Pagination\Configuration\PaginateFinderConfiguration;

/**
 * Interface SiteRepositoryInterface
 */
interface SiteRepositoryInterface extends ReadSiteRepositoryInterface
{
    /**
     * @param boolean                     $deleted
     * @param PaginateFinderConfiguration $configuration
     *
     * @return array
     */
    public function findByDeletedForPaginate($deleted, PaginateFinderConfiguration $configuration);

    /**
     * @param boolean $deleted
     *
     * @return int
     */
    public function countByDeleted($deleted);

    /**
     * @param boolean             $deleted
     * @param FinderConfiguration $configuration
     *
     * @return int
     */
    public function countWithSearchFilterByDeleted($deleted, FinderConfiguration $configuration);
}
