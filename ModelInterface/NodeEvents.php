<?php

namespace OpenOrchestra\ModelInterface;

/**
 * Class NodeEvents
 */
final class NodeEvents
{
    const NODE_UPDATE                = 'node.update';
    const NODE_UPDATE_BLOCK          = 'node.update_block';
    const NODE_UPDATE_BLOCK_POSITION = 'node.update_block_position';
    const NODE_CREATION              = 'node.creation';
    const NODE_DELETE                = 'node.delete';
    const NODE_DELETE_VERSION        = 'node.delete.version';
    const NODE_RESTORE               = 'node.restore';
    const NODE_DUPLICATE             = 'node.duplicate';
    const NODE_ADD_LANGUAGE          = 'node.add_language';
    const NODE_DELETE_BLOCK          = 'node.delete_block';
    const NODE_CHANGE_STATUS         = 'node.status';
    const PATH_UPDATED               = 'node.path.updated';
    const NODE_HARD_DELETED          = 'node.hard_deleted';
}
