<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\Pagination\Configuration\PaginateFinderConfiguration;

/**
 * Interface SiteRepositoryInterface
 */
interface SiteRepositoryInterface extends ReadSiteRepositoryInterface
{
    /**
     * @param PaginateFinderConfiguration $configuration
     * @param array|null                  $siteIds
     *
     * @return array
     */
    public function findForPaginateFilterBySiteIds(PaginateFinderConfiguration $configuration, array $siteIds = null);

    /**
     * @param array|null $siteIds
     *
     * @return int
     */
    public function countFilterBySiteIds(array $siteIds = null);

    /**
     * @param PaginateFinderConfiguration $configuration
     * @param array|null                  $siteIds
     *
     * @return int
     */
    public function countWithFilterAndSiteIds(PaginateFinderConfiguration $configuration, array $siteIds = null);
}
