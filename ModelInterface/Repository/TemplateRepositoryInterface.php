<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\AreaInterface;
use OpenOrchestra\ModelInterface\Model\TemplateInterface;

/**
 * Interface TemplateRepositoryInterface
 */
interface TemplateRepositoryInterface
{
    /**
     * @param string $templateId
     * @param string $areaId
     *
     * @return AreaInterface|null
     * @deprecated will be removed in 2.0 use findAreaInTemplateByAreaId
     */
    public function findAreaByTemplateIdAndAreaId($templateId, $areaId);

    /**
     * @param $template TemplateInterface
     * @param string    $areaId
     *
     * @return null|AreaInterface
     */
    public function findAreaInTemplateByAreaId(TemplateInterface $template, $areaId);

    /**
     * @param string $templateId
     *
     * @return TemplateInterface
     */
    public function findOneByTemplateId($templateId);

    /**
     * @param boolean $deleted
     *
     * @return array
     */
    public function findByDeleted($deleted);
}
