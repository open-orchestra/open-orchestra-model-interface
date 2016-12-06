<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\WorkflowTransitionInterface;

/**
 * Interface WorkflowProfileRepositoryInterface
 */
interface WorkflowProfileRepositoryInterface
{
    /**
     * Test is $transition exists
     *
     * @param  WorkflowTransitionInterface $transition
     *
     * @return boolean
     */
    public function hasTransition(WorkflowTransitionInterface $transition);
}
