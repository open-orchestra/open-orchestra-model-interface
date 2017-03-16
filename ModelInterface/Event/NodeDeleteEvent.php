<?php


namespace OpenOrchestra\ModelInterface\Event;

use Symfony\Component\EventDispatcher\Event;

/**
 * Class NodeDeleteEvent
 */
class NodeDeleteEvent extends Event
{
    protected $nodeId;
    protected $siteId;

    /**
     * @param string $nodeId
     * @param string $siteId
     */
    public function __construct($nodeId, $siteId)
    {
        $this->nodeId = $nodeId;
        $this->siteId = $siteId;
    }

    /**
     * @return string
     */
    public function getNodeId()
    {
        return $this->nodeId;
    }

    /**
     * @return string
     */
    public function getSiteId()
    {
        return $this->siteId;
    }
}
