<?php

namespace Repository\User;

use Entity\User;
use Repository\EntityRepository;


/**
 * Class UserRepository
 * @package Repository
 */
class UserRepository implements EntityRepository
{

    private $users;

    /**
     * UserRepository constructor.
     * @param $users
     */
    public function __construct($users = null)
    {
        if ($users) {
            $this->users = $users;
        } else {
            $user1 = new User();
            $this->users[] = $user1;

            $user2 = new User();
            $this->users[] = $user2;
        }
    }


    /**
     * Get all entities.
     * @return mixed
     */
    public function findAll()
    {
        return $this->users;
    }
}