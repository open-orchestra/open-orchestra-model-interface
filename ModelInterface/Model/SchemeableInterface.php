<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * interface SchemeableInterface
 */
interface SchemeableInterface extends ReadSchemeableInterface
{
    /**
     * @param string $scheme
     */
    public function setScheme($scheme);
}
