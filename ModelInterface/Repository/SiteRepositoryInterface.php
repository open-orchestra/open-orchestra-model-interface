<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\ReadSiteInterface;

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
     * @return array
     */
    public function findByDeletedForPaginateAndSearch($deleted, $descriptionEntity = null, $columns = null, $search = null, $order = null, $skip = null, $limit = null);

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
     * @return int
     */
    public function countByDeletedWithSearchFilter($deleted, $descriptionEntity = null, $columns = null, $search = null);

    /**
     * @param string $domain
     *
     * @return ReadSiteInterface
     */
    public function findByAliasDomain($domain);
}
