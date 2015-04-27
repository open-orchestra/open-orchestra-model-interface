<?php

namespace OpenOrchestra\ModelInterface\Repository;

/**
 * Interface ContentTypeRepositoryInterface
 */
interface ContentTypeRepositoryInterface
{
    /**
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
     * @return array
     */
    public function findAll();

    /**
     * @param string   $contentType
     * @param int|null $version
     *
     * @return object|null
     */
    public function findOneByContentTypeIdInLastVersion($contentType);
}
