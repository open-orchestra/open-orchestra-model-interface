<?php

namespace OpenOrchestra\ModelInterface;

/**
 * Class BlockEvents
 */
final class BlockEvents
{
    const PRE_BLOCK_RENDER = 'block.pre_render';
    const POST_BLOCK_RENDER = 'block.post_render';
    const POST_BLOCK_CREATE = 'block.post_create';
    const POST_BLOCK_UPDATE = 'block.post_update';
    const POST_BLOCK_DELETE = 'block.post_delete';
}
