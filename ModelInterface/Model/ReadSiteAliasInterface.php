<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface ReadSiteAliasInterface
 */
interface ReadSiteAliasInterface extends ReadSchemeableInterface
{
    /**
     * @return string
     */
    public function getLanguage();

    /**
     * @return string
     */
    public function getDomain();

    /**
     * @return string
     */
    public function getPrefix();

    /**
     * @return boolean
     */
    public function isMain();
}
