<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * interface MetaableInterface
 */
interface MetaableInterface
{
    /**
     * @param boolean $metaIndex
     */
    public function setMetaIndex($metaIndex);

    /**
     * @return boolean
     */
    public function getMetaIndex();

    /**
     * @param boolean $metaFollow
     */
    public function setMetaFollow($metaFollow);

    /**
     * @return boolean
     */
    public function getMetaFollow();
}
