<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface AreaRootContainerInterface
 */
interface AreaRootContainerInterface
{
    /**
     * @param AreaInterface $area
     */
    public function setRootArea(AreaInterface $area);

    /**
     * @return AreaInterface
     */
    public function getRootArea();
}
