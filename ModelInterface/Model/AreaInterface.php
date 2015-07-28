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
    public function setGridX($gridX);

    /**
     * Get gridX
     *
     * @return int $gridX
     */
    public function getGridX();

    /**
     * Set gridY
     *
     * @param int $gridY
     */
    public function setGridY($gridY);

    /**
     * Get gridY
     *
     * @return int $gridY
     */
    public function getGridY();

    /**
     * Set gridWidth
     *
     * @param int $gridWidth
     */
    public function setGridWidth($gridWidth);

    /**
     * Get gridWidth
     *
     * @return int $gridWidth
     */
    public function getGridWidth();

    /**
     * Set gridHeight
     *
     * @param int $gridHeight
     */
    public function setGridHeight($gridHeight);

    /**
     * Get gridHeight
     *
     * @return int $gridHeight
     */
    public function getGridHeight();

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
