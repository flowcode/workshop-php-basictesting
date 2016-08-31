<?php

namespace Service;

use Repository\EntityRepository;
use Repository\User\UserRepository;

/**
 * Class UserService
 * @package Service
 */
class UserService
{

    /**
     * @var EntityRepository
     */
    private $userRepository;

    /**
     * @return mixed
     */
    public function findAll()
    {
        return $this->getUserRepository()->findAll();
    }

    /**
     * @return EntityRepository
     */
    public function getUserRepository(): EntityRepository
    {

        if (!$this->userRepository) {
            $this->userRepository = new UserRepository();
        }

        return $this->userRepository;
    }

    /**
     * @param EntityRepository $userRepository
     */
    public function setUserRepository(EntityRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }


}