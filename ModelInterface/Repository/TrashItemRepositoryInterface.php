<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\TrashItemInterface;
use OpenOrchestra\Pagination\Configuration\PaginateFinderConfiguration;

/**
 * Interface TrashItemRepositoryInterface
 */
interface TrashItemRepositoryInterface
{
    /**
     * @param mixed $id The identifier.
     *
     * @return TrashItemInterface
     */
    public function find($id);

    /**
     * @param PaginateFinderConfiguration $configuration
     * @param string                      $siteId
     *
     * @return array
     */
    public function findForPaginate(PaginateFinderConfiguration $configuration, $siteId);


    /**
     * @param PaginateFinderConfiguration $configuration
     * @param string                      $siteId
     *
     * @return int
     */
    public function countWithFilter(PaginateFinderConfiguration $configuration, $siteId);

    /**
     * @param string $siteId
     *
     * @return int
     */
    public function countBySite($siteId);

    /**
     * @param array $trashItemIds
     *
     * @throws \Exception
     */
    public function removeTrashItems(array $trashItemIds);
}
