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
     * @return array
     */
    public function findAll();

    /**
     * @param string   $contentType
     *
     * @return ContentTypeInterface
     */
    public function findOneByContentTypeIdInLastVersion($contentType);
}
