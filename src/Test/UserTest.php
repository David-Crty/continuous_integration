<?php

namespace Test;
use Entity\User;

class UserTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var User
     */
    protected $user;

    public function testTalk() {
        $expected = "Hello world!";
        $actual = $this->user->talk();
        $this->assertEquals($expected, $actual);
    }

    protected function setUp() {
        $this->user = new User();
        $this->user->setName("Tom");
    }

    protected function tearDown() {
        unset($this->user);
    }

}