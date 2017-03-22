<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\ContentTypeInterface;
use OpenOrchestra\Pagination\Configuration\PaginateFinderConfiguration;

/**
 * Interface ContentTypeRepositoryInterface
 */
interface ContentTypeRepositoryInterface
{
    /**
     * @param $language
     *
     * @return array
     */
    public function findAllNotDeletedInLastVersion($contentTypes = array());

    /**
     * @param PaginateFinderConfiguration $configuration
     *
     * @return array
     */
    public function findAllNotDeletedInLastVersionForPaginate(PaginateFinderConfiguration $configuration);

    /**
     * @param PaginateFinderConfiguration $configuration
     *
     * @return int
     */
    public function countNotDeletedInLastVersionWithSearchFilter(PaginateFinderConfiguration $configuration);

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
     * @param array $contentTypeIds
     *
     * @throws \Exception
     */
    public function removeByContentTypeId(array $contentTypeIds);

    /**
     * @param string $id
     *
     * @return ContentTypeInterface
     */
    public function find($id);
}
