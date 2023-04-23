<?php 

class PostInfoView extends PostInfo {

    public function fetchContent($userId) {
        $postInfo = $this->getPostInfo($userId);

        if (count($postInfo) > 0) {
            $index = count($postInfo);
            $row = $postInfo;
            for($i = 0; $i < $index; $i++) {
                echo $row[$i]["posts_text"];
                echo "<br>";
                echo $row[$i]["post_date"];
                echo "<br><br>";
            }
        }
    }  
}