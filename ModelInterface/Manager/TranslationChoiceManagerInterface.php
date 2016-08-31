<?php
namespace OpenOrchestra\ModelInterface\Manager;

use Doctrine\Common\Collections\Collection;

@trigger_error('The '.__NAMESPACE__.'\EmbedKeyword class is deprecated since version 1.2.0 and will be removed in 2.0, use MultiLanguagesChoiceManagerInterface', E_USER_DEPRECATED);

/**
 * Class TranslationChoiceManager
 *
 * @deprecated will be removed in 2.0, use MultiLanguagesChoiceManagerInterface
 */
interface TranslationChoiceManagerInterface
{
    /**
     * @param Collection $collection
     *
     * @return string
     */
    public function choose(Collection $collection);
}
