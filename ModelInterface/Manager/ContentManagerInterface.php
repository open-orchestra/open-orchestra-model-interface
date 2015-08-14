<?php

namespace OpenOrchestra\ModelInterface\Manager;

use OpenOrchestra\ModelInterface\Model\ContentInterface;

/**
 * Class ContentManagerInterface
 */
interface ContentManagerInterface
{
    /**
     * @param ContentInterface   $node
     *
     * @return ContentInterface
     */
    public function saveDuplicated(ContentInterface $node);
}
