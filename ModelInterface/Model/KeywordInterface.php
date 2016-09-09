<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * interface KeywordInterface
 */
interface KeywordInterface extends UseTrackableInterface
{
    /**
     * @return string
     */
    public function getId();

    /**
     * @return string
     */
    public function getLabel();

    /**
     * @param string $label
     */
    public function setLabel($label);
}
