<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * interface ReadSchemeableInterface
 */
interface ReadSchemeableInterface
{
    const SCHEME_DEFAULT = 'default';
    const SCHEME_HTTP = 'http';
    const SCHEME_HTTPS = 'https';
    const SCHEME_FILE = 'file';
    const SCHEME_FTP = 'ftp';

    /**
     * @return string
     */
    public function getScheme();
}
