<?php

namespace OpenOrchestra\ModelInterface\Model;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Interface BlockContainerInterface
 */
interface BlockContainerInterface
{
    /**
     * @param BlockInterface $block
     */
    public function addBlock(BlockInterface $block);

    /**
     * @param BlockInterface $block
     */
    public function removeBlock(BlockInterface $block);

    /**
     * Remove block with index $key
     *
     * @param string $key
     */
    public function removeBlockWithKey($key);

    /**
     * Get blocks
     *
     * @return array $blocks
     */
    public function getBlocks();
}
