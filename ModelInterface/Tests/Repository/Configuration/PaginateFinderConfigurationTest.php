<?php

namespace OpenOrchestra\ModelInterface\Tests\Repository;

use OpenOrchestra\ModelInterface\Repository\Configuration\PaginateFinderConfiguration;

/**
 * Class DocumentTest
 */
class PaginateFinderConfigurationTest extends FinderConfigurationTest
{
    /**
     * @param null|string $search
     * @param array|null  $columns
     * @param array|null  $descriptionEntity
     * @param array|null  $order
     * @param int|null    $limit
     * @param int|null    $skip
     *
     * @dataProvider provideConfigurationCreation
     */
    public function testPaginateConfigurationCreation($descriptionEntity, $search, $columns, $order, $limit, $skip)
    {
        $request = $this->createRequest($search, $columns, $order, $limit, $skip);

        $paginateConfiguration = PaginateFinderConfiguration::generateFromRequest($request);
        if(PaginateFinderConfiguration::isArrayOrNull($descriptionEntity))
            $paginateConfiguration->setDescriptionEntity($descriptionEntity);
        $this->finderConfigurationTest($paginateConfiguration, $search, $descriptionEntity, $columns);
        $this->isTypeOrNull("is_array", $paginateConfiguration->getOrder(), $order);
        $this->isTypeOrNull("is_int", $paginateConfiguration->getLimit(), $limit);
        $this->isTypeOrNull("is_int", $paginateConfiguration->getSkip(), $skip);
    }

    /**
     * @return array
     */
    public function provideConfigurationCreation()
    {
        return array(
            array('','search', array(), array(), 0, 1),
            array(null,'', null, null, null, null),
            array('','search', 'string', 'string', 'string', array()),
        );
    }

    /**
     * @param null|string $search
     * @param null|array  $columns
     * @param null|array  $order
     * @param null|int    $limit
     * @param null|int    $skip
     *
     * @return \Symfony\Component\HttpFoundation\Request
     */
    protected function createRequest($search = null, $columns = null, $order = null, $limit = null, $skip = null)
    {
        $request = parent::createRequest($search, $columns);
        if($order !== NULL)
            $request->request->set('order', $order);
        if($limit !== NULL)
            $request->request->set('limit', $limit);
        if($skip !== NULL)
            $request->request->set('skip', $skip);

        return $request;
    }
}
