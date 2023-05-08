<?php

class Search extends dbh {

    protected function getUser($uid) {
        $stmt = $this->connect()->prepare('SELECT users_id FROM users WHERE users_uid = ?;');

        if (!$stmt->execute(array($uid))) {
            header("location: profile.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: post.php?error=usernotfound");
            exit();
        }

        $searchedUserProfile = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $searchedUserProfile;
    }
}