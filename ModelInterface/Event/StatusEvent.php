<?php

namespace OpenOrchestra\ModelInterface\Event;

use Symfony\Component\EventDispatcher\Event;
use OpenOrchestra\ModelInterface\Model\StatusInterface;

/**
 * Class StatusEvent
 */
class StatusEvent extends Event
{
    protected $status;

    /**
     * @param StatusInterface $status
     */
    public function __construct(StatusInterface $status)
    {
        $this->status = $status;
    }

    /**
     * @return StatusInterface
     */
    public function getStatus()
    {
        return $this->status;
    }
}
