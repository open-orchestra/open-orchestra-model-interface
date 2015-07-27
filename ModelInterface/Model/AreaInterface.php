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
    public function setX($x);

    /**
     * Get x
     *
     * @return int $x
     */
    public function getX();

    /**
     * Set y
     *
     * @param int $y
     */
    public function setY($y);

    /**
     * Get y
     *
     * @return int $y
     */
    public function getY();

    /**
     * Set width
     *
     * @param int $width
     */
    public function setWidth($width);

    /**
     * Get width
     *
     * @return int $width
     */
    public function getWidth();

    /**
     * Set height
     *
     * @param int $height
     */
    public function setHeight($height);

    /**
     * Get height
     *
     * @return int $height
     */
    public function getHeight();

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
