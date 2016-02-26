<?php

namespace OpenOrchestra\ModelInterface\Event;

use OpenOrchestra\ModelInterface\Model\NodeInterface;
use OpenOrchestra\ModelInterface\Model\StatusInterface;
use Symfony\Component\EventDispatcher\Event;
use OpenOrchestra\ModelInterface\Event\EventTrait\EventStatusable;
use OpenOrchestra\ModelInterface\Event\EventTrait\EventStatusableInterface;

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
}
