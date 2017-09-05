<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface RedirectionInterface
 */
interface RedirectionInterface extends ReadRedirectionInterface
{
    const ENTITY_TYPE = 'redirection';

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
     * @param array $wildcard
     */
    public function setWildcard($wildcard);

    /**
     * @param string $routePattern
     */
    public function setRoutePattern($routePattern);

    /**
     * @param string $url
     */
    public function setUrl($url);

    /**
     * @param boolean $permanent
     */
    public function setPermanent($permanent);
}
