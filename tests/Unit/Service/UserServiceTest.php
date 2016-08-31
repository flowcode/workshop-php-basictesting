<?php

namespace Unit\Service;

use Repository\EntityRepository;
use Service\UserService;

/**
 * Created by PhpStorm.
 * User: juanma
 * Date: 8/31/16
 * Time: 8:17 AM
 */
class UserServiceTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var UserService
     */
    private $entity;

    public function testFindAll_default_ok()
    {
        $this->entity = new UserService();

        $userRepositoryStub = $this->createMock(EntityRepository::class);
        $userRepositoryStub->method('findAll')
            ->willReturn([1, 2]);

        $this->entity->setUserRepository($userRepositoryStub);


        $users = $this->entity->findAll();

        $this->assertEquals(2, count($users));
    }

}
