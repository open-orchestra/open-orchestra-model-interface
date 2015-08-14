<?php

namespace OpenOrchestra\ModelInterface\Manager;

use OpenOrchestra\ModelInterface\Model\VersionableInterface;

/**
 * Class VersionableSaverInterface
 */
interface VersionableSaverInterface
{
    /**
     * Duplicate a node
     *
     * @param VersionableInterface   $versionable
     *
     * @return VersionableInterface
     */
    public function saveDuplicated(VersionableInterface $versionable);
}
