<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\StatusInterface;
use OpenOrchestra\Pagination\Configuration\PaginationRepositoryInterface;

/**
 * Interface StatusRepositoryInterface
 */
interface StatusRepositoryInterface extends PaginationRepositoryInterface
{
    /**
     * @return StatusInterface
     */
    public function findOneByInitial();

    /**
     * @return StatusInterface
     */
    public function findOneByPublished();

    /**
     * @return array
     */
    public function findByAutoPublishFrom();

    /**
     * @return StatusInterface
     */
    public function findOneByAutoUnpublishTo();

    /**
     * @param string $name
     *
     * @return mixed
     */
    public function findOtherByInitial($name);

    /**
     * @param string $id
     *
     * @return StatusInterface
     */
    public function find($id);

    /**
     * @return StatusInterface
     */
    public function findOneByEditable();
}
