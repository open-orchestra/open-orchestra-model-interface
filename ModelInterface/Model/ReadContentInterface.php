<?php


namespace OpenOrchestra\ModelInterface\Model;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Interface ReadContentInterface
 */
interface ReadContentInterface extends KeywordableInterface
{
    /**
     * @return ArrayCollection
     */
    public function getAttributes();

    /**
     * @param string $name
     *
     * @return ReadContentAttributeInterface|null
     */
    public function getAttributeByName($name);

    /**
     * @return string
     */
    public function getLanguage();

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string
     */
    public function getSiteId();
}
