<?php

namespace OpenOrchestra\ModelInterface\Model;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Interface InternalUrlInterface
 */
interface InternalUrlInterface extends ReadInternalUrlInterface
{
    /**
     * @param string $siteId
     */
    public function setSiteId($siteId);

    /**
     * @param string $aliasId
     */
    public function setAliasId($aliasId);

    /**
     * @param string $nodeId
     */
    public function setNodeId($nodeId);

    /**
     * Set wildcards
     *
     * @param array $wildcards
     */
    public function setWildcards(array $wildcards);

    /**
     * @param string $query
     */
    public function setQuery($query);
}
