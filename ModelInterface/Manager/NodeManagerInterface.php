<?php
namespace OpenOrchestra\ModelInterface\Manager;


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
     * @param string $nodeId
     * @param string $siteId
     * @param string $language
     *
     * @return NodeInterface
     */
    public function duplicateNode($nodeId, $siteId, $language, $status);
}
