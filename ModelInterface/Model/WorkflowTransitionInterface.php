<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface WorkflowTransitionInterface
 */
interface WorkflowTransitionInterface
{
    /**
     * @param StatusInterface $status
     */
    public function setStatusFrom(StatusInterface $status);

    /**
     * @return StatusInterface
     */
    public function getStatusFrom();

    /**
     * @param StatusInterface $status
     */
    public function setStatusTo(StatusInterface $status);

    /**
     * @return StatusInterface
     */
    public function getStatusTo();
}
