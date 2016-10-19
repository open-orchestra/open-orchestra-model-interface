<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * interface ReadAreaInterface
 */
interface ReadAreaInterface
{
    /**
     * Get blocks
     *
     * @return array $blocks
     */
    public function getBlocks();

    /**
     * @param BlockInterface $block
     *
     * @return bool|int|mixed|string
     */
    public function getBlockIndex(BlockInterface $block);
}
