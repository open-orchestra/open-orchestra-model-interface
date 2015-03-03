<?php

namespace OpenOrchestra\ModelInterface\MongoTrait;

use Doctrine\Common\Collections\ArrayCollection;
use OpenOrchestra\ModelInterface\Model\KeywordInterface;

/**
 * Trait Keywordable
 */
trait Keywordable
{
    /**
     * @var ArrayCollection
     *
     * @ODM\EmbedMany(targetDocument="OpenOrchestra\ModelBundle\Document\EmbedKeyword")
     */
    protected $keywords;

    /**
     * @return ArrayCollection
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @param KeywordInterface $keyword
     */
    public function addKeyword(KeywordInterface $keyword)
    {
        $this->keywords->add($keyword);
    }

    /**
     * @param KeywordInterface $keyword
     */
    public function removeKeyword(KeywordInterface $keyword)
    {
        $this->keywords->removeElement($keyword);
    }
}
