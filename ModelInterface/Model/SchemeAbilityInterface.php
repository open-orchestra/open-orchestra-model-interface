<?php

namespace PHPOrchestra\ModelInterface\Model;

/**
 * interface SchemeAbilityInterface
 */
interface SchemeAbilityInterface
{
    const SCHEME_HTTP = 'http';
    const SCHEME_HTTPS = 'https';
    const SCHEME_FILE = 'file';
    const SCHEME_FTP = 'ftp';

    /**
     * @param string $scheme
     */
    public function setScheme($scheme);

    /**
     * @return string
     */
    public function getScheme();
}