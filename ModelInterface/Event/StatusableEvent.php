<?php

namespace OpenOrchestra\ModelInterface\Event;

use OpenOrchestra\ModelInterface\Model\StatusableInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class StatusEvent
 */
class StatusableEvent extends Event
{
    protected $statusableElement;

    /**
     * @param StatusableInterface $statusableElement
     */
    public function __construct(StatusableInterface $statusableElement)
    {
        $this->statusableElement = $statusableElement;
    }

    /**
     * @return StatusableInterface
     */
    public function getStatusableElement()
    {
        return $this->statusableElement;
    }
}
