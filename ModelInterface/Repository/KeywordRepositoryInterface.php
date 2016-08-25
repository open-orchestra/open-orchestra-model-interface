<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\KeywordInterface;
use OpenOrchestra\Pagination\Configuration\PaginationRepositoryInterface;

/**
 * Interface KeywordRepositoryInterface
 */
interface KeywordRepositoryInterface extends PaginationRepositoryInterface
{
    /**
     * @return array
     */
    public function findAll();

    /**
     * @return mixed
     */
    public function getManager();

    /**
     * @param string $label
     *
     * @return KeywordInterface
     */
    public function findOneByLabel($label);

    /**
     * @param string $nodeId
     *
     * @return array
     */
    public function findUsedInNode($nodeId);

    
    /**
     * @param string $contentId
     *
     * @return array
     */
    public function findUsedInContent($contentId);

    /**
     * @param string $contentId
     *
     * @return array
     */
    public function findUsedInContentType($contentId);

    /**
     * @param string $mediaId
     *
     * @return array
     */
    public function findUsedInMedia($mediaId);
}
