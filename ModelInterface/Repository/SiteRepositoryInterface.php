<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\ReadSiteInterface;
use OpenOrchestra\ModelInterface\Repository\Configuration\FinderConfiguration;
use OpenOrchestra\ModelInterface\Repository\Configuration\PaginateFinderConfiguration;

/**
 * Interface SiteRepositoryInterface
 */
interface SiteRepositoryInterface
{
    /**
     * @param string $siteId
     *
     * @return ReadSiteInterface
     */
    public function findOneBySiteId($siteId);

    /**
     * @param boolean $deleted
     *
     * @return array
     */
    public function findByDeleted($deleted);

    /**
     * @param boolean     $deleted
     * @param array|null  $descriptionEntity
     * @param array|null  $columns
     * @param string|null $search
     * @param array|null  $order
     * @param int|null    $skip
     * @param int|null    $limit
     *
     * @deprecated will be removed in 0.3.0, use findByDeletedForPaginate instead
     *
     * @return array
     */
    public function findByDeletedForPaginateAndSearch($deleted, $descriptionEntity = null, $columns = null, $search = null, $order = null, $skip = null, $limit = null);

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
     * @param boolean    $deleted
     * @param array|null $descriptionEntity
     * @param array|null $columns
     * @param array|null $search
     *
     * @deprecated will be removed in 0.3.0, use countWithSearchFilterByDeleted instead
     *
     * @return int
     */
    public function countByDeletedWithSearchFilter($deleted, $descriptionEntity = null, $columns = null, $search = null);

    /**
     * @param boolean             $deleted
     * @param FinderConfiguration $configuration
     *
     * @return int
     */
    public function countWithSearchFilterByDeleted($deleted, FinderConfiguration $configuration);

    /**
     * @param string $domain
     *
     * @return ReadSiteInterface
     */
    public function findByAliasDomain($domain);
}
