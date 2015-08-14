<?php

namespace OpenOrchestra\ModelInterface\Manager;

use OpenOrchestra\ModelInterface\Model\NodeInterface;

/**
 * Class NodeManagerInterface
 */
interface NodeManagerInterface
{
    /**
     * Create transverse node
     *
     * @param string $language
     * @param string $siteId
     *
     * @return NodeInterface
     */
    public function createTransverseNode($language, $siteId);
}
