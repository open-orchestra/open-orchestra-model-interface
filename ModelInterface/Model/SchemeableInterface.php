<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * interface SchemeableInterface
 */
interface SchemeableInterface
{
    const SCHEME_DEFAULT = 'default';
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
