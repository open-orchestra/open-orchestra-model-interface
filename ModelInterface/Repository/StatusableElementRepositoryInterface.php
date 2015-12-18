<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\StatusInterface;

/**
 * Interface StatusableElementRepositoryInterface
 */
interface StatusableElementRepositoryInterface
{
    /**
     * @param StatusInterface $status
     *
     * @return bool
     */
    public function hasStatusedElement(StatusInterface $status);
}
