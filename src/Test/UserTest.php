<?php

namespace Test;
use Entity\User;

class UserTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var User
     */
    protected $user;
    
    protected $name = "Tom";

    public function testTalk() {
        $expected = "Hello my name is ".$this->name;
        $actual = $this->user->talk();
        $this->assertEquals($expected, $actual);
    }

    protected function setUp() {
        $this->user = new User();
        $this->user->setName($this->name);
    }

    protected function tearDown() {
        unset($this->user);
    }

}