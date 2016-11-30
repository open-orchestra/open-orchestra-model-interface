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
     * @return array
     */
    public function findNotOutOfWorkflow();

    /**
     * @return StatusInterface
     */
    public function findOneByInitial();

    /**
     * @param string $name
     *
     * @return mixed
     */
    public function findOtherByInitial($name);

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
     * @return array
     */
    public function findOtherByAutoUnpublishTo($name);

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

    /**
     * @return StatusInterface
     */
    public function findOneByOutOfWorkflow();

    /**
     * @param string $name
     *
     * @return array
     */
    public function findOtherByTranslationState($name);

    /**
     * @return StatusInterface
     */
    public function findOneByTranslationState();
}
