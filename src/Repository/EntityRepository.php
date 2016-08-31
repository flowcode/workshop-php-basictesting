<?php


namespace Repository;

/**
 * Class EntityRepository
 * @package Repository
 */
interface EntityRepository
{

    /**
     * Get all entities.
     * @return mixed
     */
    public function findAll();
}