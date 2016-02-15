<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\TemplateFlexInterface;
use OpenOrchestra\ModelInterface\Model\AreaFlexInterface;

/**
 * Interface TemplateFlexRepositoryInterface
 */
interface TemplateFlexRepositoryInterface
{
    /**
     * @param string $templateId
     *
     * @return TemplateFlexInterface
     */
    public function findOneByTemplateId($templateId);

    /**
     * @param boolean $deleted
     *
     * @return array
     */
    public function findByDeleted($deleted);


    /**
     * @param TemplateFlexInterface $template
     * @param string                $areaId
     *
     * @return null|AreaFlexInterface
     */
    public function findAreaInTemplateByAreaId(TemplateFlexInterface $template, $areaId);
}
