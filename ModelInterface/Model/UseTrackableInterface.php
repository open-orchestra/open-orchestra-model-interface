<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface UseTrackableInterface
 */
interface UseTrackableInterface
{
    const KEY_NODE = 'node';
    const KEY_CONTENT = 'content';

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
     * @return array
     */
    public function getUseReferences();
}
