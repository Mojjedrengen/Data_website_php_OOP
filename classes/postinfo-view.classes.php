<?php 

class PostInfoView extends PostInfo {

    public function fetchContent($userId) {
        $postInfo = $this->getPostInfo($userId);

        if (count($postInfo) > 0) {
            $index = count($postInfo);
            $row = $postInfo;
            for($i = $index-1; $i >= 0; $i--) {
                echo $row[$i]["posts_text"];
                echo "<br>";
                echo $row[$i]["post_date"];
                echo "<br><br>";
            }
        }
    }

    public function fetchAllContent() {
        $postInfo = $this->getAllPostInfo();
        $postUserInfo = $this->getUsers();

        if (count($postInfo) > 0) {
            $index = count($postInfo);
            $row = $postInfo;
            for($i = $index-1; $i >= 0; $i--) {
                echo $row[$i]["posts_text"];
                echo "<br>";
                echo $postUserInfo[$row[$i]["users_id"]-2]["users_uid"];
                echo "<br>";
                echo $row[$i]["post_date"];
                echo "<br><br>";
            }
        }
    }
}