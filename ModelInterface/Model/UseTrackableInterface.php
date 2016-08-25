<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface UseTrackableInterface
 */
interface UseTrackableInterface
{
    const KEY_NODE = 'node';
    const KEY_CONTENT = 'content';
    const KEY_CONTENT_TYPE = 'content_type';
    const KEY_MEDIA = 'media';

    /**
     * @param string $nodeId
     */
    public function addUseInNode($nodeId);

    /**
     * @param string $nodeId
     */
    public function removeUseInNode($nodeId);

    /**
     * @param string $contentId
     */
    public function addUseInContent($contentId);

    /**
     * @param string $contentId
     */
    public function removeUseInContent($contentId);

    /**
     * @param string $contentTypeId
     */
    public function addUseInContentType($contentTypeId);
    
    /**
     * @param string $contentTypeId
     */
    public function removeUseInContentType($contentTypeId);

    /**
     * @return array
     */
    public function getUseReferences();
}
