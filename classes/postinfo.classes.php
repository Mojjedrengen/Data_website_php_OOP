<?php

class PostInfo extends Dbh {

    protected function getPostInfo($userId) {
        $stmt = $this->connect()->prepare('SELECT * FROM posts WHERE users_id = ?;');

        if (!$stmt->execute(array($userId))) {
            $stmt = null;
            header("location: uploadpost.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: uploadpost.php?error=postnotfound");
            exit();
        }

        $postInfoData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $postInfoData;
    }

    protected function getAllPostInfo() {
        $stmt = $this->connect()->prepare('SELECT * FROM posts;');

        if (!$stmt->execute()) {
            $stmt = null;
            header("location: uploadpost.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: uploadpost.php?error=postnotfound");
            exit();
        }

        $postInfoData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $postInfoData;
    }

    protected function getUsers($userId) {
        $stmt = $this->connect()->prepare('SELECT * FROM users WHERE users_id = ?;');

        if (!$stmt->execute(array($userId))) {
            $stmt = null;
            header("location: uploadpost.php?error=stmtfailed");
            exit();
        }

        /*if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: uploadpost.php?error=postnotfound");
            exit();
        }*/

        $postUserInfoData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $postUserInfoData;
    }

    protected function uploadPostInfo($content, $date, $userId) {
        $stmt = $this->connect()->prepare('INSERT INTO posts (posts_text, post_date, users_id) VALUES (?, ?, ?);');


        if (!$stmt->execute(array($content, $date, $userId))) {
            $stmt = null;
            header("location: uploadpost.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

}