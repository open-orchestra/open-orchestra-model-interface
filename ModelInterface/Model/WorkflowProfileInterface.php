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
     * @param WorkflowTransitionInterface $transition
     *
     * @return boolean
     */
    public function hasTransition(WorkflowTransitionInterface $transition);
}
