<?php
    include_once 'header.php';

    include "classes/dbh.classes.php";
    include "classes/postinfo.classes.php";
    include "classes/postinfo-view.classes.php";
    $postInfo = new PostInfoView();
?>

    <div id="content-container">
      <div id="main">
          <div class="container">
            <h3>My Posts</h3>
            <p>
                <?php
                    $postInfo->fetchContent($_SESSION["userid"]);
                ?>
            </p>
        </div>
      </div>
    </div>

</body>
</html>