<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/1
 * Time: 19:27
 */

namespace DesignPattern\Strategy;

class CashRebate extends CashStrategy {

    private $discount;

    public function __construct($discount) {
        $this->discount = $discount;
    }

    public function acceptCash($money) {
        return $money * $this->discount;
    }
}