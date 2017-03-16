<?php


namespace OpenOrchestra\ModelInterface\Event;

use Symfony\Component\EventDispatcher\Event;

/**
 * Class ContentDeleteEvent
 */
class ContentDeleteEvent extends Event
{
    protected $contentId;
    protected $siteId;

    /**
     * @param string $contentId
     * @param string $siteId
     */
    public function __construct($contentId, $siteId)
    {
        $this->contentId = $contentId;
        $this->siteId = $siteId;
    }

    /**
     * @return string
     */
    public function getContentId()
    {
        return $this->contentId;
    }

    /**
     * @return string
     */
    public function getSiteId()
    {
        return $this->siteId;
    }
}
