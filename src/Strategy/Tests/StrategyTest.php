<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/3
 * Time: 14:59
 */

namespace DesignPattern\Strategy\Tests;

use DesignPattern\Strategy\CashContext;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase {

    public function testStrategy() {
        try {
            $cash_context = new CashContext();
            $cash_context->CashContext(CashContext::CASH_TYPE_NORMAL);
            $this->assertEquals(500, $cash_context->getResult(500));

            $cash_context->CashContext(CashContext::CASH_TYPE_REBATE);
            $this->assertEquals(400, $cash_context->getResult(500));

            $cash_context->CashContext(CashContext::CASH_TYPE_RETURN);
            $this->assertEquals(300, $cash_context->getResult(500));

        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}
