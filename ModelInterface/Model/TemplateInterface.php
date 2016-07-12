<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface TemplateInterface
 */
interface TemplateInterface extends AreaContainerInterface, BlockContainerInterface, VersionableInterface, SoftDeleteableInterface
{
    /**
     * @param string $boDirection
     * @deprecated will be removed in 2.0
     */
    public function setBoDirection($boDirection);

    /**
     * @return string
     * @deprecated will be removed in 2.0
     */
    public function getBoDirection();

    /**
     * @return string
     */
    public function getId();

    /**
     * @param string $name
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param int $siteId
     */
    public function setSiteId($siteId);

    /**
     * @return int
     */
    public function getSiteId();

    /**
     * @param int $templateId
     */
    public function setTemplateId($templateId);

    /**
     * @return string
     */
    public function getTemplateId();

    /**
     * @param string $language
     * @deprecated will be removed in 2.0
     */
    public function setLanguage($language);

    /**
     * @return string
     * @deprecated will be removed in 2.0
     */
    public function getLanguage();

    /**
     * @param AreaInterface $area
     */
    public function setArea(AreaInterface $area);

    /**
     * @return AreaInterface
     */
    public function getArea();
}
