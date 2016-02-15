<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * interface AreaFlexInterface
 */
interface AreaFlexInterface extends ReadAreaFlexInterface
{
    const TYPE_ROOT = 'root';
    const TYPE_ROW = 'row';
    const TYPE_COLUMN = 'column';
    const ROOT_AREA_ID = 'root';
    const ROOT_AREA_LABEL = 'Root';

    /**
     * Set area type
     *
     * @param string $areaType
     */
    public function setAreaType($areaType);

    /**
     * Get area type
     *
     * @return string $areaType
     */
    public function getAreaType();

    /**
     * Set label
     *
     * @param string $label
     */
    public function setLabel($label);

    /**
     * Get label
     *
     * @return string $label
     */
    public function getLabel();

    /**
     * Set areaId
     *
     * @param string
     */
    public function setAreaId($htmlId);

    /**
     * Get areaId
     *
     * @return string
     */
    public function getAreaId();

    /**
     * Get width
     *
     * @return string
     */
    public function getWidth();

    /**
     * set width
     *
     * @param string $width
     */
    public function setWidth($width);
}
