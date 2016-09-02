<?php

namespace OpenOrchestra\ModelInterface\Manager;

/**
 * Class MultiLanguagesChoiceManager
 */
interface MultiLanguagesChoiceManagerInterface
{
    /**
     * @param array       $elements
     * @param string|null $language
     *
     * @return string
     */
    public function choose(array $elements, $language = null);
}
