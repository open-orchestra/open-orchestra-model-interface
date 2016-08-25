<?php

namespace OpenOrchestra\ModelInterface\Repository\RepositoryTrait;

/**
 * Interface UseTrackableTraitInterface
 */
interface UseTrackableTraitInterface
{
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
