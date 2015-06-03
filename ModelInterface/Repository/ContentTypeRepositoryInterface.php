<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\ContentTypeInterface;

/**
 * Interface ContentTypeRepositoryInterface
 */
interface ContentTypeRepositoryInterface
{
    /**
     * @deprecated use findOneByContentTypeIdInLastVersion to get the last version
     *
     * @param string   $contentType
     * @param int|null $version
     *
     * @return object|null
     */
    public function findOneByContentTypeIdAndVersion($contentType, $version = null);

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
     * @return array
     */
    public function findAllByDeletedInLastVersionForPaginateAndSearch($descriptionEntity = null, $columns = null, $search = null, $order = null, $skip = null, $limit = null);

    /**
     * @param array|null  $descriptionEntity
     * @param array|null  $columns
     * @param string|null $search
     *
     * @return int
     */
    public function countByDeletedInLastVersionForPaginateAndSearch($descriptionEntity = null, $columns = null, $search = null);

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
