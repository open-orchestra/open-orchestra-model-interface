<?php

namespace OpenOrchestra\ModelInterface\Event;

use OpenOrchestra\ModelInterface\Event\EventTrait\EventStatusable;
use OpenOrchestra\ModelInterface\Event\EventTrait\EventStatusableInterface;
use OpenOrchestra\ModelInterface\Model\ContentInterface;
use OpenOrchestra\ModelInterface\Model\StatusableInterface;
use OpenOrchestra\ModelInterface\Model\StatusInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class ContentEvent
 */
class ContentEvent extends Event implements EventStatusableInterface
{
    use EventStatusable;

    protected $content;

    /**
     * @param ContentInterface     $content
     * @param StatusInterface|null $previousStatus
     */
    public function __construct(ContentInterface $content, StatusInterface $previousStatus = null)
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
     * @return StatusableInterface
     */
    public function getStatusableElement()
    {
        return $this->getContent();
    }
}
