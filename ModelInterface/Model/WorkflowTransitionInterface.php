<?php

namespace OpenOrchestra\ModelInterface\Model;

use OpenOrchestra\ModelInterface\Model\StatusInterface;

/**
 * Interface WorkflowTransitionInterface
 */
interface WorkflowTransitionInterface
{
    /**
     * @param string $status
     */
    public function setStatusFrom(StatusInterface $status);

    /**
     * @return StatusInterface
     */
    public function getStatusFrom();

    /**
     * @param string $status
     */
    public function setStatusTo(StatusInterface $status);

    /**
     * @return StatusInterface
     */
    public function getStatusTo();
}
