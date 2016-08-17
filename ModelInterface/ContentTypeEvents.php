<?php

namespace OpenOrchestra\ModelInterface;

/**
 * Class ContentTypeEvents
 */
class ContentTypeEvents
{
    const CONTENT_TYPE_CREATE = 'contentType.create';
    const CONTENT_TYPE_DELETE = 'contentType.delete';
    const CONTENT_TYPE_UPDATE = 'contentType.update';
    const CONTENT_TYPE_PRE_PERSIST = 'contentType.prePersist';
}
