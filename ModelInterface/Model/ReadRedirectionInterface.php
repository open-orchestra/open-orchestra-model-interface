<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface ReadRedirectionInterface
 */
interface ReadRedirectionInterface
{
    /**
     * @return string
     */
    public function getId();

    /**
     * @return string
     */
    public function getSiteId();

    /**
     * @return string
     */
    public function getLocale();

    /**
     * @return string
     */
    public function getSiteName();

    /**
     * @return string
     */
    public function getRoutePattern();

    /**
     * @return string
     */
    public function getNodeId();

    /**
     * @return int
     */
    public function getNodeVersion();

    /**
     * @return string
     */
    public function getUrl();

    /**
     * @return boolean
     */
    public function isPermanent();
}
