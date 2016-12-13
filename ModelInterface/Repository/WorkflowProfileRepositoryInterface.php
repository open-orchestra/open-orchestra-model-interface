<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\StatusInterface;

/**
 * Interface WorkflowProfileRepositoryInterface
 */
interface WorkflowProfileRepositoryInterface
{
    /**
     * Test is a transition ($fromStatus, $toStatus) exists
     *
     * @param StatusInterface $fromStatus
     * @param StatusInterface $toStatus
     *
     * @return boolean
     */
    public function hasTransition(StatusInterface $fromStatus, StatusInterface $toStatus);
}
