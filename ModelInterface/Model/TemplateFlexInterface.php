<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface TemplateFlexInterface
 */
interface TemplateFlexInterface extends AreaFlexContainerInterface, SoftDeleteableInterface
{

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
