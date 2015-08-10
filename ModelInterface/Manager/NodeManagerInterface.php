<?php

namespace OpenOrchestra\ModelInterface\Manager;

use OpenOrchestra\ModelInterface\Model\NodeInterface;

/**
 * Class NodeManagerInterface
 */
interface NodeManagerInterface
{
    /**
     * @param string $language
     * @param string $siteId
     *
     * @return NodeInterface
     */
    public function createTransverseNode($language, $siteId);

    /**
     * @param NodeInterface   $node
     *
     * @return NodeInterface
     */
    public function saveDuplicatedNode(NodeInterface $node);
}
