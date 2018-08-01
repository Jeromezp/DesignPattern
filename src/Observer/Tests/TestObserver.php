<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/1
 * Time: 16:16
 */

namespace DesignPattern\Observer\Tests;

use PHPUnit\Framework\TestCase;
use DesignPattern\Observer\UserSubject;
use DesignPattern\Observer\UserObserver;

class TestObserver extends TestCase {
    public function testObserver() {
        $userSubject = new UserSubject();
        $userObserverOne = new UserObserver('小明');
        $userObserverTwo = new UserObserver('小白');
        $userObserverThree = new UserObserver('小红');

        $userSubject->attach($userObserverOne);
        $userSubject->attach($userObserverTwo);
        $userSubject->attach($userObserverThree);

        $userSubject->setStatus('user status');
        $userSubject->notify();

        $this->assertEquals(3, $userSubject->getObserversCount());
    }
}
