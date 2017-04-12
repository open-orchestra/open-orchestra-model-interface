<?php

namespace OpenOrchestra\ModelInterface\Event;

use OpenOrchestra\ModelInterface\Model\NodeInterface;
use OpenOrchestra\ModelInterface\Model\StatusableInterface;
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
    protected $blocks;
    protected $previousPath = null;

    /**
     * @param NodeInterface        $node
     * @param StatusInterface|null $previousStatus
     * @param array|null           $blocks
     */
    public function __construct(NodeInterface $node, $previousStatus = null, array $blocks = null)
    {
        $this->node = $node;
        $this->previousStatus = $previousStatus;
        $this->blocks = $blocks;
    }

    /**
     * @return NodeInterface
     */
    public function getNode()
    {
        return $this->node;
    }

    /**
     * @return array
     */
    public function getBlocks()
    {
        return $this->blocks;
    }

    /**
     * @param string $path
     */
    public function setPreviousPath($path)
    {
        $this->previousPath = $path;
    }

    /**
     * @return string
     */
    public function getPreviousPath()
    {
        return $this->previousPath;
    }

    /**
     * @return StatusableInterface
     */
    public function getStatusableElement()
    {
        return $this->getNode();
    }
}
