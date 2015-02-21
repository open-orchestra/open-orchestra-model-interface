<?php

namespace OpenOrchestra\ModelInterface\Event;

use OpenOrchestra\ModelInterface\Model\ContentTypeInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class ContentTypeEvent
 */
class ContentTypeEvent extends Event
{
    protected $contentType;

    /**
     * @param ContentTypeInterface $contentType
     */
    public function __construct(ContentTypeInterface $contentType)
    {
        $this->contentType = $contentType;
    }

    /**
     * @return ContentTypeInterface
     */
    public function getContentType()
    {
        return $this->contentType;
    }
}
