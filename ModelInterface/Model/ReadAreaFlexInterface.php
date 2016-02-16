<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * interface ReadAreaFlexInterface
 */
interface ReadAreaFlexInterface extends AreaFlexContainerInterface, HtmlClassContainerInterface
{
    /**
     * Get htmlId
     *
     * @return string $htmlId
     */
    public function getAreaId();
}
