<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * interface AreaInterface
 */
interface AreaInterface extends ReadAreaInterface
{
    const TYPE_ROOT = 'root';
    const TYPE_ROW = 'row';
    const TYPE_COLUMN = 'column';
    const ROOT_AREA_ID = 'root';
    const ROOT_AREA_LABEL = 'Root';

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
     * Set htmlId
     *
     * @param string $htmlId
     */
    public function setAreaId($htmlId);

    /**
     * Get htmlId
     *
     * @return string $htmlId
     */
    public function getAreaId();

    /**
     * Set boDirection
     *
     * @param string $boDirection
     * @deprecated will be removed in 2.0
     */
    public function setBoDirection($boDirection);

    /**
     * Get boDirection
     *
     * @return string $boDirection
     * @deprecated will be removed in 2.0
     */
    public function getBoDirection();

    /**
     * Set blocks
     *
     * @param array $blocks
     */
    public function setBlocks(array $blocks);

    /**
     * @param array $block
     */
    public function addBlock(array $block);

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
}
