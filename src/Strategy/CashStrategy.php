<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/1
 * Time: 19:26
 */

namespace DesignPattern\Strategy;

abstract class CashStrategy {
    public abstract function acceptCash($money);
}