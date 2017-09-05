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
    public function getAliasId();

    /**
     * @return string
     */
    public function getNodeId();

    /**
     * @return array
     */
    public function getWildcard();

    /**
     * @return string
     */
    public function getRoutePattern();

    /**
     * @return string
     */
    public function getUrl();

    /**
     * @return boolean
     */
    public function isPermanent();
}
