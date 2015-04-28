<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * interface ReadAreaInterface
 */
interface ReadAreaInterface extends AreaContainerInterface, HtmlClassContainerInterface
{
    /**
     * Get htmlId
     *
     * @return string $htmlId
     */
    public function getAreaId();

    /**
     * Get classes
     *
     * @deprecated use getHtmlClass instead
     *
     * @return array $classes
     */
    public function getClasses();
}
