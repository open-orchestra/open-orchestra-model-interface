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
     */
    public function findAreaByTemplateIdAndAreaId($templateId, $areaId);

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
