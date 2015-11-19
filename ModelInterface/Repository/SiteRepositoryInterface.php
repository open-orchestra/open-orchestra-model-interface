<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\Pagination\Configuration\FinderConfiguration;
use OpenOrchestra\Pagination\Configuration\PaginateFinderConfiguration;
use OpenOrchestra\Pagination\Configuration\PaginationRepositoryInterface;

/**
 * Interface SiteRepositoryInterface
 */
interface SiteRepositoryInterface extends ReadSiteRepositoryInterface, PaginationRepositoryInterface
{
    /**
     * @param boolean                     $deleted
     * @param PaginateFinderConfiguration $configuration
     *
     * @deprecated use findForPaginate instead, will be removed in 1.2.0
     *
     * @return array
     */
    public function findByDeletedForPaginate($deleted, PaginateFinderConfiguration $configuration);

    /**
     * @param boolean $deleted
     *
     * @deprecated use count instead, will be removed in 1.2.0
     *
     * @return int
     */
    public function countByDeleted($deleted);

    /**
     * @param boolean             $deleted
     * @param FinderConfiguration $configuration
     *
     * @deprecated use countWithFilter instead, will be removed in 1.2.0
     *
     * @return int
     */
    public function countWithSearchFilterByDeleted($deleted, FinderConfiguration $configuration);
}
