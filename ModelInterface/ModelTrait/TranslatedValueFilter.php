<?php

namespace OpenOrchestra\ModelInterface\ModelTrait;

use Doctrine\Common\Collections\ArrayCollection;
use OpenOrchestra\ModelInterface\Model\TranslatedValueInterface;

/**
 * Trait TranslatedValueFilter
 */
trait TranslatedValueFilter
{
    /**
     * @param ArrayCollection $collection
     * @param string          $language
     *
     * @return mixed
     */
    public function filterByLanguage(ArrayCollection $collection, $language = 'en')
    {
        $result = $collection->filter(function(TranslatedValueInterface $translatedValue) use ($language) {
            return $language == $translatedValue->getLanguage();
        });

        return $result->first()->getValue();
    }
}
