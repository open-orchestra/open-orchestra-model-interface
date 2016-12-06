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
     * @param string $locale
     */
    public function setLocale($locale);

    /**
     * @param string $siteName
     */
    public function setSiteName($siteName);

    /**
     * @param string $routePattern
     */
    public function setRoutePattern($routePattern);

    /**
     * @param string $nodeId
     */
    public function setNodeId($nodeId);

    /**
     * @param string $url
     */
    public function setUrl($url);

    /**
     * @param boolean $permanent
     */
    public function setPermanent($permanent);
}
