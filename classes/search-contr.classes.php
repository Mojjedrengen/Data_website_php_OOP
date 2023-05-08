<?php

class SearchContr extends Search {
    private $uid;

    public function __construct($uid) {
        $this->uid = $uid;
    }
    
    public function searchUser() {
        $result = $this->getUser($this->uid);
        return $result;
    }    
}
