<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * interface OptionallyVersionableInterface
 */
interface OptionallyVersionableInterface
{
    /**
     * @param boolean $versionable
     */
    public function setVersionable($versionable);

    /**
     * @return int
     */
    public function isVersionable();
}
