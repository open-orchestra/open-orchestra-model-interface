<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * interface MetaableInterface
 */
interface MetaableInterface
{
    /**
     * @param string $metaKeywords
     */
    public function setMetaKeywords($metaKeywords);

    /**
     * @return string
     */
    public function getMetaKeywords();

    /**
     * @param string $metaDescription
     */
    public function setMetaDescription($metaDescription);

    /**
     * @return string
     */
    public function getMetaDescription();

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
