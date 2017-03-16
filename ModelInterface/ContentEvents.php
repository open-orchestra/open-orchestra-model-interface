<?php

namespace OpenOrchestra\ModelInterface;

/**
 * Class ContentEvents
 */
class ContentEvents
{
    const CONTENT_UPDATE = 'content.update';
    const CONTENT_CREATION = 'content.creation';
    const CONTENT_DELETE = 'content.delete';
    const CONTENT_DELETE_VERSION = 'content.delete.version';
    const CONTENT_RESTORE = 'content.restore';
    const CONTENT_DUPLICATE = 'content.duplicate';
    const CONTENT_CHANGE_STATUS = 'content.status';
}
