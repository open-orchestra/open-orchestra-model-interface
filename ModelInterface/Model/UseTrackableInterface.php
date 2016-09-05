<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface UseTrackableInterface
 */
interface UseTrackableInterface
{
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
