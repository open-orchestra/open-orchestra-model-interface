<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * interface AreaInterface
 */
interface AreaInterface extends ReadAreaInterface
{
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
     */
    public function setBoDirection($boDirection);

    /**
     * Get boDirection
     *
     * @return string $boDirection
     */
    public function getBoDirection();

    /**
     * Set x
     *
     * @param int $x
     */
    public function setXInGrid($xInGrid);

    /**
     * Get xInGrid
     *
     * @return int $xInGrid
     */
    public function getXInGrid();

    /**
     * Set yInGrid
     *
     * @param int $yInGrid
     */
    public function setYInGrid($yInGrid);

    /**
     * Get yInGrid
     *
     * @return int $yInGrid
     */
    public function getYInGrid();

    /**
     * Set widthInGrid
     *
     * @param int $widthInGrid
     */
    public function setWidthInGrid($widthInGrid);

    /**
     * Get widthInGrid
     *
     * @return int $widthInGrid
     */
    public function getWidthInGrid();

    /**
     * Set heightInGrid
     *
     * @param int $heightInGrid
     */
    public function setHeightInGrid($heightInGrid);

    /**
     * Get heightInGrid
     *
     * @return int $heightInGrid
     */
    public function getHeightInGrid();

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

}
