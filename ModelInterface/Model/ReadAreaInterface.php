<?php

namespace OpenOrchestra\ModelInterface\Model;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * interface ReadAreaInterface
 */
interface ReadAreaInterface
{
    /**
     * Get blocks
     *
     * @return ArrayCollection $blocks
     */
    public function getBlocks();

    /**
     * @param BlockInterface $block
     *
     * @return mixed
     */
    public function getBlockIndex(BlockInterface $block);
}
