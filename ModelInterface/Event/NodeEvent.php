<?php

namespace OpenOrchestra\ModelInterface\Event;

use OpenOrchestra\ModelInterface\Model\NodeInterface;
use OpenOrchestra\ModelInterface\Model\StatusInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class NodeEvent
 */
class NodeEvent extends Event
{
    protected $node;
    protected $previousStatus;
    protected $area;
    protected $block;

    /**
     * @param NodeInterface        $node
     * @param StatusInterface|null $previousStatus
     */
    public function __construct(NodeInterface $node, $previousStatus = null)
    {
        $this->node = $node;
        $this->previousStatus = $previousStatus;
    }

    /**
     * @return NodeInterface
     */
    public function getNode()
    {
        return $this->node;
    }

    /**
     * @return StatusInterface|null
     */
    public function getPreviousStatus()
    {
        return $this->previousStatus;
    }
}
