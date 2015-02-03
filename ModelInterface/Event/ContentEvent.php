<?php

namespace PHPOrchestra\ModelInterface\Event;

use PHPOrchestra\ModelInterface\Model\ContentInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class ContentEvent
 */
class ContentEvent extends Event
{
    protected $content;

    /**
     * @param ContentInterface $content
     */
    public function __construct(ContentInterface $content)
    {
        $this->content = $content;
    }

    /**
     * @return ContentInterface
     */
    public function getContent()
    {
        return $this->content;
    }
}
