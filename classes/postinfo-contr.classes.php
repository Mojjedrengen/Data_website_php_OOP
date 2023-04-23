<?php

class PostInfoContr extends PostInfo {

    private $userId;

    public function __construct($userId) {
        $this->userId = $userId;
    }

    public function makeNewPostInfo($content) {
        // Error handlers
        if ($this->emptyInputCheck($content) == true) {
            header("location: ../uploadpostInfo.php?error=emptyinput");
            exit();
        }

        $date = date("Y-m-d");
        // Upload postInfo
        $this->uploadPostInfo($content, $date, $this->userId);
    }

    private function emptyInputCheck($content) {
        $result = null;
        if (empty($content)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }
}