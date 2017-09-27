<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface ReadInternalUrlInterface
 */
interface ReadInternalUrlInterface
{
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
    public function getWildcards();

    /**
     * @return string
     */
    public function getQuery();
}
