<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface RedirectionInterface
 */
interface RedirectionInterface
{
    /**
     * @return string
     */
    public function getId();

    /**
     * @param string $siteId
     */
    public function setSiteId($siteId);

    /**
     * @return string
     */
    public function getSiteId();

    /**
     * @param string $locale
     */
    public function setLocale($locale);

    /**
     * @return string
     */
    public function getLocale();

    /**
     * @param string $siteName
     */
    public function setSiteName($siteName);

    /**
     * @return string
     */
    public function getSiteName();

    /**
     * @param string $routePattern
     */
    public function setRoutePattern($routePattern);

    /**
     * @return string
     */
    public function getRoutePattern();

    /**
     * @param string $nodeId
     */
    public function setNodeId($nodeId);

    /**
     * @return string
     */
    public function getNodeId();

    /**
     * @param string $url
     */
    public function setUrl($url);

    /**
     * @return string
     */
    public function getUrl();

    /**
     * @return boolean
     */
    public function isPermanent();

    /**
     * @param boolean $permanent
     */
    public function setPermanent($permanent);
}
