<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/1
 * Time: 19:25
 */

namespace DesignPattern\Strategy;


class CashContext {

    const CASH_TYPE_NORMAL = 1;
    const CASH_TYPE_RETURN = 2;
    const CASH_TYPE_REBATE = 3;

    /***
     * @var CashStrategy
     */
    private $cash_strategy;

    public function CashContext($type) {
        switch ($type) {
            case self::CASH_TYPE_NORMAL:
                $this->cash_strategy = new CashNormal();
                break;
            case self::CASH_TYPE_RETURN:
                $this->cash_strategy = new CashReturn();
                break;
            case self::CASH_TYPE_REBATE:
                $this->cash_strategy = new CashRebate(0.8);
                break;
        }
    }

    public function getResult($money) {
        return $this->cash_strategy->acceptCash($money);
    }
}