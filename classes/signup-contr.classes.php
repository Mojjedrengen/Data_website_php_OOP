<?php

class SignupContr extends Signup {
    
    private $uid;
    private $email;
    private $pwd;
    private $pwdrepeat;

    public function __construct($uid, $email, $pwd, $pwdrepeat) {
        $this->uid = $uid;
        $this->email = $email;
        $this->pwd = $pwd;
        $this->pwdrepeat = $pwdrepeat;
    }

    public function signupUser() {
        if ($this->emptyInput() == false) {
            // echo "Empty input!";
            header("location: ../signup.php?error=emptyinput");
            exit();
        }
        if ($this->invalidUid() == false) {
            // echo "Invalid username!";
            header("location: ../signup.php?error=username");
            exit();
        }
        if ($this->invalidEmail() == false) {
            // echo "Invalid email!";
            header("location: ../signup.php?error=email");
            exit();
        }
        if ($this->pwdMatch() == false) {
            // echo "Password don't match!";
            header("location: ../signup.php?error=passwordmatch");
            exit();
        }
        if ($this->uidTakenCheck() == false) {
            // echo "Username or email is taken!";
            header("location: ../signup.php?error=useroremailtaken");
            exit();
        }

        $this->setUser($this->uid, $this->email, $this->pwd);
    }

    private function emptyInput() {
        $result = null;
        if (empty($this->uid || empty($this->email) || empty($this->pwd) || empty($this->pwdrepeat))) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidUid() {
        $result = null;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail() {
        $result = null;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function pwdMatch() {
        $result = null;
        if ($this->pwd !== $this->pwdrepeat) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function uidTakenCheck() {
        $result = null;
        if (!$this->checkUser($this->uid, $this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
