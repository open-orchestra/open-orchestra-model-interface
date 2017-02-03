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

    /**
     * @param string $versionName
     */
    public function setVersionName($versionName);

    /**
     * @return string
     */
    public function getVersionName();
}
