<?php

namespace DesignPattern\Observer;

use \SplObserver;

class UserObserver implements SplObserver {
    private $name;
    private $observerStatus;

    public function __construct($name) {
        $this->name = $name;
    }

    public function update(\SplSubject $subject) {
        $this->observerStatus = $subject->getStatus();
        dump("$this->observerStatus changed, $this->name is notified.");
    }
}
