<?php
namespace OpenOrchestra\ModelInterface\Manager;

use Doctrine\Common\Collections\Collection;

/**
 * Class TranslationChoiceManager
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
