<?php

namespace OpenOrchestra\ModelInterface\Event;

use OpenOrchestra\ModelInterface\Model\NodeInterface;
use OpenOrchestra\ModelInterface\Model\StatusableInterface;
use OpenOrchestra\ModelInterface\Model\StatusInterface;
use Symfony\Component\EventDispatcher\Event;
use OpenOrchestra\ModelInterface\Event\EventTrait\EventStatusable;
use OpenOrchestra\ModelInterface\Event\EventTrait\EventStatusableInterface;
use OpenOrchestra\ModelInterface\Model\BlockInterface;

/**
 * Class NodeEvent
 */
class NodeEvent extends Event implements EventStatusableInterface
{
    use EventStatusable;

    protected $node;
    protected $area;
    protected $block;

    /**
     * @param NodeInterface        $node
     * @param StatusInterface|null $previousStatus
     * @param BlockInterface|null  $block
     */
    public function __construct(NodeInterface $node, $previousStatus = null, $block = null)
    {
        $this->node = $node;
        $this->previousStatus = $previousStatus;
        $this->block = $block;
    }

    /**
     * @return NodeInterface
     */
    public function getNode()
    {
        return $this->node;
    }

    /**
     * @return StatusableInterface
     */
    public function getStatusableElement()
    {
        return $this->getNode();
    }

    /**
     * @return BlockInterface
     */
    public function getBlock()
    {
        return $this->block;
    }
}
