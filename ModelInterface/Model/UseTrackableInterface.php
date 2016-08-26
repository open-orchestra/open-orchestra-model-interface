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
     * @param string $entityId
     * @param string $entityType
     */
    public function addUseInEntity($entityId, $entityType);

    /**
     * @param string $entityId
     * @param string $entityType
     */
    public function removeUseInEntity($entityId, $entitytype);

    /**
     * @return array
     */
    public function getUseReferences();

    /**
     * @return boolean
     */
    public function isUsed();
}
