<?php

namespace OpenOrchestra\ModelInterface\Event;

use OpenOrchestra\ModelInterface\Model\ContentInterface;
use Symfony\Component\EventDispatcher\Event;
use OpenOrchestra\ModelInterface\Event\EventTrait\StatusableEvent;

/**
 * Class ContentEvent
 */
class ContentEvent extends Event
{
    use StatusableEvent;

    protected $content;

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
}
