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
     * @param string|null $entityType
     *
     * @return array
     */
    public function getUseReferences($entityType = null);

    /**
     * @return boolean
     */
    public function isUsed();
}
