<?php

namespace OpenOrchestra\ModelInterface\Event;

use OpenOrchestra\ModelInterface\Model\BlockInterface;
use OpenOrchestra\ModelInterface\Model\NodeInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class BlockNodeEvent
 */
class BlockNodeEvent extends Event
{
    protected $node;
    protected $block;

    /**
     * @param NodeInterface  $node
     * @param BlockInterface $block
     */
    public function __construct(NodeInterface $node, BlockInterface $block)
    {
        $this->node = $node;
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
     * @return BlockInterface
     */
    public function getBlock()
    {
        return $this->block;
    }
}
