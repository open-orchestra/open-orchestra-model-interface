<?php


namespace OpenOrchestra\ModelInterface\Model;

@trigger_error('The '.__NAMESPACE__.'\EmbedKeyword class is deprecated since version 1.2.0 and will be removed in 2.0', E_USER_DEPRECATED);

/**
 * Interface TranslatedValueContainerInterface
 *
 * @deprecated will be removed in 2.0
 */
interface TranslatedValueContainerInterface
{
    /**
     * @return array
     */
    public function getTranslatedProperties();
}
