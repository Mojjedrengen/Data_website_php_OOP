<?php

class Signup extends Dbh {
    
    protected function setUser($uid, $email, $firstname, $surname, $gender, $birthday, $county, $city, $address, $phonenumber, $pwd) {
        $stmt = $this->connect()->prepare('INSERT INTO users (users_uid, users_email, users_firstname, users_surname, users_gender, users_birthday, users_country, users_city, users_address, users_phonenumber,users_pwd, users_dateofcreation, users_numberofposts) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);');

        $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
        $date = date("Y-m-d");

        if (!$stmt->execute(array($uid, $email, $firstname, $surname, $gender, $birthday, $county, $city, $address, $phonenumber, $hashedpwd, $date, 0))) {
            $stmt = null;
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }

    protected function checkUser($uid, $email) {
        $stmt = $this->connect()->prepare('SELECT users_uid FROM users WHERE users_uid = ? OR users_email = ?;');

        if (!$stmt->execute(array($uid, $email))) {
            $stmt = null;
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }

        $resultCheck = null;
        if ($stmt->rowCount() > 0) {
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }

        return $resultCheck;
    }

    protected function getUserId($uid) {
        $stmt = $this->connect()->prepare('SELECT users_id FROM users WHERE users_uid = ?;');

        if (!$stmt->execute(array($uid))) {
            $stmt = null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: profile.php?error=profilenotfound");
            exit();
        }

        $profileData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $profileData;
    }

}
