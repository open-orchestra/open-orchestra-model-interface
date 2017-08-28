<?php

namespace OpenOrchestra\ModelInterface\Model;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * interface AreaInterface
 */
interface AreaInterface extends ReadAreaInterface
{
    /**
     * Set blocks
     *
     * @param ArrayCollection $blocks
     */
    public function setBlocks(ArrayCollection $blocks);

    /**
     * @param int            $key
     * @param BlockInterface $block
     */
    public function setBlock($key, BlockInterface $block);

    /**
     * @param BlockInterface $block
     * @param int|null       $key
     */
    public function addBlock(BlockInterface $block, $key = null);

    /**
     * Remove block
     *
     * @param BlockInterface $block
     */
    public function removeBlock(BlockInterface $block);

    /**
     * Remove block with index $key
     *
     * @param string $key
     */
    public function removeBlockWithKey($key);
}
