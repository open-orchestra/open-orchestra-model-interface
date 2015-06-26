<?php

namespace OpenOrchestra\ModelInterface\MongoTrait;

/**
 * Trait Metaable
 */
trait Metaable
{
    /**
     * @var string $metaKeywords
     *
     * @ODM\Field(type="string")
     */
    protected $metaKeywords;

    /**
     * @var string $metaDescription
     *
     * @ODM\Field(type="string")
     */
    protected $metaDescription;

    /**
     * @var boolean metaIndex
     *
     * @ODM\Field(type="boolean")
     */
    protected $metaIndex = false;

    /**
     * @var boolean metaFollow
     *
     * @ODM\Field(type="boolean")
     */
    protected $metaFollow = false;

    /**
     * @param string $metaKeywords
     */
    public function setMetaKeywords($metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;
    }

    /**
     * @return string
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords;
    }

    /**
     * @param string $metaDescription
     */
    public function setMetaDescription($metaDescription)
    {
        $this->metaDescription = $metaDescription;
    }

    /**
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * @param boolean $metaIndex
     */
    public function setMetaIndex($metaIndex)
    {
        $this->metaIndex = $metaIndex;
    }

    /**
     * @return boolean
     */
    public function getMetaIndex()
    {
        return $this->metaIndex;
    }

    /**
     * @param boolean $metaFollow
     */
    public function setMetaFollow($metaFollow)
    {
        $this->metaFollow = $metaFollow;
    }

    /**
     * @return boolean
     */
    public function getMetaFollow()
    {
        return $this->metaFollow;
    }
}
