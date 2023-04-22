<?php 

class ProfileInfoContr extends ProfileInfo {
    
    private $userId;
    private $userUid;

    public function __construct($userId, $userUid) {
        $this->userId = $userId;
        $this->userUid = $userUid;
    }

    public function defaultProfileInfo() {
        $profileAbout = "Tell people something interesting about you";
        $profileTitle = "Hello my name is ". $this->userUid;;
        $profileText = "Welcome to my profile";
        $this->setProfileInfo($profileAbout, $profileTitle, $profileText, $this->userId);
    }

    public function updateProfileInfo($about, $introTitle, $introText) {
        // Error handlers
        if ($this->emptyInputCheck($about, $introTitle, $introText) == true) {
            header("location: ../profilesettings.php?error=emptyinput");
            exit();
        }

        // Update profile info
        $this->setNewProfileInfo($about, $introTitle, $introText, $this->userId);
    }

    private function emptyInputCheck($about, $introTitle, $introText) {
        $result = null;
        if (empty($about) || empty($introTitle) || empty($introText)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

}