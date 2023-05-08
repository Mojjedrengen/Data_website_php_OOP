<?php

class SignupContr extends Signup {
    
    private $uid;
    private $email;
    private $firstname;
    private $surname;
    private $gender;
    private $birthday;
    private $country;
    private $city;
    private $address;
    private $phonenumber;
    private $pwd;
    private $pwdrepeat;
    private $date;

    public function __construct($uid, $email, $firstname, $surname, $gender, $birthday, $country, $city, $address, $phonenumber,$pwd, $pwdrepeat, $date) {
        $this->uid = $uid;
        $this->email = $email;
        $this->firstname = $firstname;
        $this->surname = $surname;
        $this->gender = $gender;
        $this->birthday = $birthday;
        $this->country = $country;
        $this->city = $city;
        $this->address = $address;
        $this->phonenumber = $phonenumber;
        $this->pwd = $pwd;
        $this->pwdrepeat = $pwdrepeat;
        $this->date = $date;
    }

    public function signupUser() { //lav flere error handler
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

    public function fetchUserId($uid) {
        $userid = $this->getUserId($uid);
        return $userid[0]["users_id"];
    }
}
