<?php

namespace OpenOrchestra\ModelInterface\Model;

use Doctrine\Common\Collections\Collection;

/**
 * Interface AreaFlexContainerInterface
 */
interface AreaFlexContainerInterface
{
    /**
     * Add subArea
     *
     * @param AreaFlexInterface $subArea
     */
    public function addArea(AreaFlexInterface $subArea);

    /**
     * Remove subArea by areaId
     *
     * @param string $areaId
     */
    public function removeAreaByAreaId($areaId);

    /**
     * Get subAreas
     *
     * @param Collection $subAreas
     */
    public function setAreas(Collection $subAreas);

    /**
     * Get subAreas
     *
     * @return Collection $subAreas
     */
    public function getAreas();
}
