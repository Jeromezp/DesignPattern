<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/1
 * Time: 19:26
 */

namespace DesignPattern\Strategy;


class CashNormal extends CashStrategy {

    public function acceptCash($money) {
        return $money;
    }
}