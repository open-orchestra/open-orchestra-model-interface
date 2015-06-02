<?php

namespace OpenOrchestra\ModelInterface\Event;

use OpenOrchestra\ModelInterface\Model\StatusableInterface;
use Symfony\Component\EventDispatcher\Event;
use OpenOrchestra\ModelInterface\Model\StatusInterface;

/**
 * Class StatusableEvent
 */
class StatusableEvent extends Event
{
    protected $statusableElement;
    protected $toStatus;

    /**
     * @param StatusableInterface $statusableElement
     */
    public function __construct(StatusableInterface $statusableElement, StatusInterface $toStatus)
    {
        $this->statusableElement = $statusableElement;
        $this->toStatus = $toStatus;
    }

    /**
     * @return StatusableInterface
     */
    public function getStatusableElement()
    {
        return $this->statusableElement;
    }

    /**
     * @return StatusInterface
     */
    public function getToStatus()
    {
        return $this->toStatus;
    }
}
