<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/1
 * Time: 19:26
 */

namespace DesignPattern\Strategy;


class CashReturn extends CashStrategy {

    private $return_money;
    private $price_standard;

    public function __construct($price_standard, $return_money) {
        $this->return_money = $return_money;
        $this->price_standard = $price_standard;
    }

    public function acceptCash($money) {
        if ($money >= $this->price_standard) {
            return $money - $this->return_money;
        }
        return $money;
    }
}