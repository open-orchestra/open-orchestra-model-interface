<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\ContentTypeInterface;
use OpenOrchestra\Pagination\Configuration\FinderConfiguration;
use OpenOrchestra\Pagination\Configuration\PaginateFinderConfiguration;

/**
 * Interface ContentTypeRepositoryInterface
 */
interface ContentTypeRepositoryInterface
{
    /**
     * @return array
     */
    public function findAllNotDeletedInLastVersion();

    /**
     * @param PaginateFinderConfiguration $configuration
     *
     * @return array
     */
    public function findAllNotDeletedInLastVersionForPaginate(PaginateFinderConfiguration $configuration);

    /**
     * @param array|null  $descriptionEntity
     * @param array|null  $columns
     * @param string|null $search
     *
     * @deprecated will be removed in 0.3.0, use countNotDeletedInLastVersionWithSearchFilter instead
     *
     * @return int
     */
    public function countByDeletedInLastVersionWithSearchFilter($descriptionEntity = null, $columns = null, $search = null);

    /**
     * @param FinderConfiguration $configuration
     *
     * @return int
     */
    public function countNotDeletedInLastVersionWithSearchFilter(FinderConfiguration $configuration);

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
