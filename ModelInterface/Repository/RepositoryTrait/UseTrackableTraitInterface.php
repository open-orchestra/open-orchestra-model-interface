<?php

namespace OpenOrchestra\ModelInterface\Repository\RepositoryTrait;

/**
 * Interface UseTrackableTraitInterface
 */
interface UseTrackableTraitInterface
{
    /**
     * @param string $entityId
     * @param string $entityType
     *
     * @return array
     */
    public function findByUsedInEntity($entityId, $entityType);
}
