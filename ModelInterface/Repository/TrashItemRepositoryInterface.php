<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\TrashItemInterface;
use OpenOrchestra\Pagination\Configuration\PaginationRepositoryInterface;

/**
 * Interface TrashItemRepositoryInterface
 */
interface TrashItemRepositoryInterface extends PaginationRepositoryInterface
{
    /**
     * @param $entityId
     *
     * @return TrashItemInterface
     */
    public function findByEntity($entityId);
}
