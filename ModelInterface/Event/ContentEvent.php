<?php

namespace OpenOrchestra\ModelInterface\Event;

use OpenOrchestra\ModelInterface\Model\ContentInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class ContentEvent
 */
class ContentEvent extends Event
{
    protected $content;
    protected $previousStatus;

    /**
     * @param ContentInterface     $content
     * @param StatusInterface|null $previousStatus
     */
    public function __construct(ContentInterface $content, $previousStatus = null)
    {
        $this->content = $content;
        $this->previousStatus = $previousStatus;
    }

    /**
     * @return ContentInterface
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return StatusInterface|null
     */
    public function getPreviousStatus()
    {
        return $this->previousStatus;
    }
}
