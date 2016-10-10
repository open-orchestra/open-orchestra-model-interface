<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface EmbedStatusInterface
 */
interface EmbedStatusInterface
{
    public static function createFromStatus(StatusInterface $status);
}
