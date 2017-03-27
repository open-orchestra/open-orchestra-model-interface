<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\StatusInterface;

/**
 * Interface StatusableContainerRepositoryInterface
 */
interface StatusableContainerRepositoryInterface
{
    /**
     * @param StatusInterface $status
     *
     * @return bool
     */
    public function hasStatusedElement(StatusInterface $status);

    /**
     * @param StatusInterface $status
     */
    public function updateEmbeddedStatus(StatusInterface $status);
}
