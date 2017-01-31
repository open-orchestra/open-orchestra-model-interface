<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * interface AutoPublishableInterface
 */
interface AutoPublishableInterface
{
    /**
     * @param \DateTime|null $date
     */
    public function setPublishDate($date);

    /**
     * @return \DateTime
     */
    public function getPublishDate();

    /**
     * @param \DateTime|null $date
     */
    public function setUnpublishDate($date);

    /**
     * @return \DateTime
     */
    public function getUnpublishDate();
}
