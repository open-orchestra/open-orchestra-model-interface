<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface TemplateInterface
 */
interface TemplateInterface extends AreaContainerInterface, BlockContainerInterface, VersionableInterface
{
    /**
     * @param string $boDirection
     */
    public function setBoDirection($boDirection);

    /**
     * @return string
     */
    public function getBoDirection();

    /**
     * @param boolean $deleted
     */
    public function setDeleted($deleted);

    /**
     * @return boolean
     */
    public function getDeleted();

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
}
