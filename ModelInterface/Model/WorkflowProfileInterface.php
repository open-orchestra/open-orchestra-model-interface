<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface WorkflowProfileInterface
 */
interface WorkflowProfileInterface
{
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
