<?php

namespace OpenOrchestra\ModelInterface\Model;

@trigger_error('The '.__NAMESPACE__.'\EmbedKeywordInterface class is deprecated since version 1.2.0 and will be removed in 1.3.0', E_USER_DEPRECATED);

/**
 * Interface EmbedKeywordInterface
 *
 * @deprecated will be removed in 1.3.0
 */
interface EmbedKeywordInterface
{
    /**
     * @param KeywordInterface $keyword
     *
     * @return EmbedKeywordInterface
     */
    public static function createFromKeyword(KeywordInterface $keyword);
}
