<?php

namespace OpenOrchestra\ModelInterface\Event\EventTrait;

use OpenOrchestra\ModelInterface\Model\StatusInterface;

/**
 * Trait EventStatusable
 */
trait EventStatusable
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
