<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface WorkflowProfileInterface
 */
interface WorkflowProfileInterface
{
    const ENTITY_TYPE = 'workflow_profile';

    /**
     * @param WorkflowTransitionInterface $transition
     */
    public function addTransition(WorkflowTransitionInterface $transition);

    /**
     * @param StatusInterface $fromStatus
     * @param StatusInterface $toStatus
     *
     * @return boolean
     */
    public function hasTransition(StatusInterface $fromStatus, StatusInterface $toStatus);
}
