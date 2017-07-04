<?php
/**
 * Created by PhpStorm.
 * User: live-edu
 * Date: 4/07/17
 * Time: 21:01
 */

namespace IQDate\UserBundle\Tests\Services;


use Doctrine\DBAL\Driver\Connection;
use IQDate\UserBundle\Services\UserService;
use Symfony\Bundle\FrameworkBundle\Tests\TestCase;

class UserServiceTest extends TestCase
{
    function testSmoke(){
        $movkDriverBuilder = $this->getMockBuilder(Connection::class);
        $mock=$movkDriverBuilder->getMock();
        $service = new UserService($mock);
        $this->assertNotNull($service->findUser());
    }
}