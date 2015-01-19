<?php

namespace PHPOrchestra\ModelInterface\Model;

use Doctrine\Common\Collections\ArrayCollection;
use PHPOrchestra\ModelInterface\Model\ThemeInterface;

/**
 * Interface SiteInterface
 */
interface SiteInterface
{
    /**
     * @param string $alias
     */
    public function setAlias($alias);

    /**
     * @return string
     */
    public function getAlias();

    /**
     * @param string $block
     */
    public function addBlock($block);

    /**
     * @param string $block
     */
    public function removeBlock($block);

    /**
     * @return array
     */
    public function getBlocks();

    /**
     * @param string $defaultLanguage
     */
    public function setDefaultLanguage($defaultLanguage);

    /**
     * @return string
     */
    public function getDefaultLanguage();

    /**
     * @param string $metaKeywords
     */
    public function setMetaKeywords($metaKeywords);

    /**
     * @return string
     */
    public function getMetaKeywords();

    /**
     * @param string $metaDescription
     */
    public function setMetaDescription($metaDescription);

    /**
     * @return string
     */
    public function getMetaDescription();

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

    /**
     * @param string $domain
     */
    public function setDomain($domain);

    /**
     * @return string
     */
    public function getDomain();

    /**
     * @return string
     */
    public function getId();

    /**
     * @param array $languages
     */
    public function setLanguages($languages);

    /**
     * @return array
     */
    public function getLanguages();

    /**
     * @param string $siteId
     */
    public function setSiteId($siteId);

    /**
     * @return string
     */
    public function getSiteId();

    /**
     * Set deleted
     *
     * @param boolean $deleted
     */
    public function setDeleted($deleted);

    /**
     * Get deleted
     *
     * @return boolean $deleted
     */
    public function getDeleted();

    /**
     * Set theme
     *
     * @param ThemeInterface $theme
     */
    public function setTheme(ThemeInterface $theme);

    /**
     * Get theme
     *
     * @return ThemeInterface $theme
     */
    public function getTheme();
}
