<?php

namespace OpenOrchestra\ModelInterface\Model;


/**
 * Interface VersionnableInterface
 */
interface VersionnableInterface
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
