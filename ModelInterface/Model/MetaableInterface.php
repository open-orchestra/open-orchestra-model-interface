<?php

namespace OpenOrchestra\ModelInterface\Model;

use Doctrine\Common\Collections\Collection;
use OpenOrchestra\ModelInterface\Model\TranslatedValueContainerInterface;

/**
 * interface MetaableInterface
 */
interface MetaableInterface extends TranslatedValueContainerInterface
{
    /**
     * @param Collection $metaKeywords
     */
    public function setMetaKeywords(Collection $metaKeywords);

    /**
     * @param TranslatedValueInterface $metaKeyword
     */
    public function addMetaKeyword(TranslatedValueInterface $metaKeyword);

    /**
     * @param TranslatedValueInterface $metaKeyword
     */
    public function removeMetaKeyword(TranslatedValueInterface $metaKeyword);

    /**
     * @param string $language
     *
     * @return string
     */
    public function getMetaKeyword($language = 'en');

    /**
     * @return Collection
     */
    public function getMetaKeywords();

    /**
     * @param Collection $metaDescription
     */
    public function setMetaDescriptions(Collection $metaDescription);

    /**
     * @param TranslatedValueInterface $metaDescription
     */
    public function addMetaDescription(TranslatedValueInterface $metaDescription);

    /**
     * @param TranslatedValueInterface $metaDescription
     */
    public function removeMetaDescription(TranslatedValueInterface $metaDescription);

    /**
     * @param string $language
     *
     * @return string
     */
    public function getMetaDescription($language = 'en');

    /**
     * @return Collection
     */
    public function getMetaDescriptions();

    /**
     * @param boolean $metaIndex
     */
    public function setMetaIndex($metaIndex);

    /**
     * @return boolean
     */
    public function getMetaIndex();

    /**
     * @param boolean $metaFollow
     */
    public function setMetaFollow($metaFollow);

    /**
     * @return boolean
     */
    public function getMetaFollow();
}
