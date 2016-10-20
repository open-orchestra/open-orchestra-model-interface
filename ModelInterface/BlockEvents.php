<?php

namespace OpenOrchestra\ModelInterface;

/**
 * Class BlockEvents
 */
final class BlockEvents
{
    const PRE_BLOCK_RENDER = 'block.pre_render';
    const POST_BLOCK_RENDER = 'block.post_render';
    const BLOCK_CREATE = 'block.create';
    const BLOCK_UPDATE = 'block.update';
    const BLOCK_DELETE = 'block.delete';
}
