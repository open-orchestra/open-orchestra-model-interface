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
     * @param string $routePattern
     */
    public function setRoutePattern($routePattern);

    /**
     * @param string $url
     */
    public function setUrl($url);

    /**
     * @param InternalUrlInterface $internalUrl
     */
    public function setInternalUrl(InternalUrlInterface $internalUrl);

    /**
     * @param boolean $permanent
     */
    public function setPermanent($permanent);
}
