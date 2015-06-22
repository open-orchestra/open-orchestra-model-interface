<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\ContentTypeInterface;
use OpenOrchestra\ModelInterface\Repository\Configuration\FinderConfiguration;
use OpenOrchestra\ModelInterface\Repository\Configuration\PaginateFinderConfiguration;

/**
 * Interface ContentTypeRepositoryInterface
 */
interface ContentTypeRepositoryInterface
{
    /**
     * @return array
     */
    public function findAllByDeletedInLastVersion();

    /**
     * @param array|null  $descriptionEntity
     * @param array|null  $columns
     * @param string|null $search
     * @param array|null  $order
     * @param int|null    $skip
     * @param int|null    $limit
     *
     * @deprecated will be removed in 0.3.0, use findAllDeletedInLastVersionForPaginateAndSearch instead
     *
     * @return array
     */
    public function findAllByDeletedInLastVersionForPaginateAndSearch($descriptionEntity = null, $columns = null, $search = null, $order = null, $skip = null, $limit = null);

    /**
     * @param PaginateFinderConfiguration $configuration
     *
     * @return array
     */
    public function findAllDeletedInLastVersionForPaginate(PaginateFinderConfiguration $configuration);

    /**
     * @param array|null  $descriptionEntity
     * @param array|null  $columns
     * @param string|null $search
     *
     * @deprecated will be removed in 0.3.0, use countDeletedInLastVersionWithSearchFilter instead
     *
     * @return int
     */
    public function countByDeletedInLastVersionWithSearchFilter($descriptionEntity = null, $columns = null, $search = null);

    /**
     * @param FinderConfiguration $configuration
     *
     * @return int
     */
    public function countDeletedInLastVersionWithSearchFilter(FinderConfiguration $configuration);

    /**
     * @return int
     */
    public function countByContentTypeInLastVersion();

    /**
     * @return array
     */
    public function findAll();

    /**
     * @param string   $contentType
     *
     * @return ContentTypeInterface
     */
    public function findOneByContentTypeIdInLastVersion($contentType);

    /**
     * @param string $id
     *
     * @return ContentTypeInterface
     */
    public function find($id);
}
