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
    protected $fromStatus;

    /**
     * @param StatusableInterface $statusableElement
     */
    public function __construct(StatusableInterface $statusableElement, StatusInterface $fromStatus)
    {
        $this->statusableElement = $statusableElement;
        $this->fromStatus = $fromStatus;
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
    public function getFromStatus()
    {
        return $this->fromStatus;
    }
}
