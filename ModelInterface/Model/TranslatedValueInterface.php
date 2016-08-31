<?php

namespace OpenOrchestra\ModelInterface\Model;

@trigger_error('The '.__NAMESPACE__.'\EmbedKeyword class is deprecated since version 1.2.0 and will be removed in 2.0', E_USER_DEPRECATED);

/**
 * interface TranslatedValueInterface
 *
 * @deprecated will be removed in 2.0
 */
interface TranslatedValueInterface
{
    /**
     * @param string $language
     */
    public function setLanguage($language);

    /**
     * @return string
     */
    public function getLanguage();

    /**
     * @param string $value
     */
    public function setValue($value);

    /**
     * @return string
     */
    public function getValue();
}
