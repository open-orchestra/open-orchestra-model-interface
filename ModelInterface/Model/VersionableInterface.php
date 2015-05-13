<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface VersionableInterface
 */
interface VersionableInterface
{
    /**
     * @param int $version
     */
    public function setVersion($version);

    /**
     * @return int
     */
    public function getVersion();
}
