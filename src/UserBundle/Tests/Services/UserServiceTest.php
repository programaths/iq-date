<?php
/**
 * Created by PhpStorm.
 * User: live-edu
 * Date: 4/07/17
 * Time: 21:01
 */

namespace IQDate\UserBundle\Tests\Services;

use IQDate\UserBundle\Repository\IQUserRepositoryInterface;
use IQDate\UserBundle\Services\UserService;
use Symfony\Bundle\FrameworkBundle\Tests\TestCase;
use Symfony\Component\HttpKernel\Tests\Fixtures\TestClient;

class UserServiceTest extends TestCase
{
    function testSmoke(){
        $movkDriverBuilder = $this->getMockBuilder(IQUserRepositoryInterface::class);
        $mock=$movkDriverBuilder->getMock();
        $service = new UserService($mock);
        $this->assertNotNull($service->findUser());
    }

}