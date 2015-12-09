<?php

namespace OpenOrchestra\ModelInterface\Event\EventTrait;

/**
 * Trait StatusableEvent
 */
trait StatusableEvent
{
    protected $previousStatus;

    /**
     * @return StatusInterface|null
     */
    public function getPreviousStatus()
    {
        return $this->previousStatus;
    }
}
