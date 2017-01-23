<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\RedirectionInterface;
use OpenOrchestra\Pagination\Configuration\PaginateFinderConfiguration;

/**
 * Interface RedirectionRepositoryInterface
 */
interface RedirectionRepositoryInterface
{
    /**
     * @return array
     */
    public function findAll();

    /**
     * @param string $id
     *
     * @return RedirectionInterface
     */
    public function find($id);

    /**
     * @param string $nodeId
     * @param string $locale
     * @param string $siteId
     *
     * @return array
     */
    public function findByNode($nodeId, $locale, $siteId);

    /**
     * @param string $siteId
     *
     * @return array
     */
    public function findBySiteId($siteId);

    /**
     * @param PaginateFinderConfiguration $configuration
     *
     * @return array
     */
    public function findForPaginate(PaginateFinderConfiguration $configuration);

    /**
     * @return int
     */
    public function count();

    /**
     * @param PaginateFinderConfiguration $configuration
     *
     * @return int
     */
    public function countWithFilter(PaginateFinderConfiguration $configuration);
}
