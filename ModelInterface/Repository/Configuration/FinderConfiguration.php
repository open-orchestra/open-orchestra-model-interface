<?php

namespace OpenOrchestra\ModelInterface\Repository\Configuration;

/**
 * Class FinderConfiguration
 */
class FinderConfiguration
{
    protected $descriptionEntity = null;
    protected $columns = null;
    protected $search = null;

    /**
     * @param string|null $descriptionEntity
     * @param array|null  $columns
     * @param string|null $search
     *
     * @return FinderConfiguration
     */
    public static function generateFinderConfiguration($descriptionEntity, array $columns = null, $search = null)
    {
        $finderConfig = new FinderConfiguration();
        $finderConfig->setColumns($columns);
        $finderConfig->setDescriptionEntity($descriptionEntity);
        $finderConfig->setSearch($search);

        return $finderConfig;
    }

    /**
     * @return array descriptionEntity
     */
    public function getDescriptionEntity()
    {
        return $this->descriptionEntity;
    }

    /**
     * @param null|array $descriptionEntity
     */
    public function setDescriptionEntity($descriptionEntity)
    {
        $this->descriptionEntity = $descriptionEntity;
    }

    /**
     * @return array columns
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * @param null|array $columns
     */
    public function setColumns($columns)
    {
        $this->columns = $columns;
    }

    /**
     * @return string search
     */
    public function getSearch()
    {
        return $this->search;
    }

    /**
     * @param string $search
     */
    public function setSearch($search)
    {
        $this->search = $search;
    }

}
