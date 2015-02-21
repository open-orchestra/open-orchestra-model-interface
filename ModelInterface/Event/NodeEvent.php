<?php

namespace OpenOrchestra\ModelInterface\Event;

use OpenOrchestra\ModelInterface\Model\AreaInterface;
use OpenOrchestra\ModelInterface\Model\BlockInterface;
use OpenOrchestra\ModelInterface\Model\NodeInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class NodeEvent
 */
class NodeEvent extends Event
{
    protected $node;
    protected $area;
    protected $block;

    /**
     * @param NodeInterface  $node
     */
    public function __construct(NodeInterface $node)
    {
        $this->node = $node;
    }

    /**
     * @return NodeInterface
     */
    public function getNode()
    {
        return $this->node;
    }
}
