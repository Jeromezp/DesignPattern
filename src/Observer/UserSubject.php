<?php

namespace DesignPattern\Observer;

class UserSubject implements \SplSubject {
    private $status;
    private $observers;

    public function __construct() {
        $this->observers = new \SplObjectStorage();
    }

    public function attach(\SplObserver $observer) {
        $this->observers->attach($observer);
    }

    public function detach(\SplObserver $observer) {
        $this->observers->detach($observer);
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getObserversCount() {
        return $this->observers->count();
    }

    public function getStatus() {
        return $this->status;
    }

    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}