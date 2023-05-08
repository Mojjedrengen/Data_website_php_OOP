<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    //searchs for user
    $search = htmlspecialchars($_GET["search"], ENT_QUOTES, "UTF-8");

    include "classes/dbh.classes.php";
    include "classes/search.classes.php";
    include "classes/search-contr.classes.php";

    $searchUser = new SearchContr($search);
    $userId = $searchUser->searchUser();
    print_r($userId);


    //gets the profile and posts
    include "classes/profileinfo.classes.php";
    include "classes/profileinfo-view.classes.php";
    $profileInfo = new ProfileInfoView();
    include "classes/postinfo.classes.php";
    include "classes/postinfo-view.classes.php";
    $postInfo = new PostInfoView();
    
}

?>

<div id="content-container">
      <div id="main">
          <div class="container">
            <form action="includes/searchuser.inc.php" method="GET">
              <input id="search" name="search" type="text" placeholder="Search Users">
              <input id="submit" type="submit" value="Search">
            </form>
            <h3>ABOUT</h3>
            <p>
              <?php
                $profileInfo->fetchAbout($userId);
              ?>
            </p>

            <h3>
              <?php
                  $profileInfo->fetchTitle($userId);
                ?>
            </h3>
            <p>
              <?php
                  $profileInfo->fetchText($userId);
                ?>
            </p>
            <br>
            <a href="profilesettings.php">Change profile</a>
            <br><br>
            <h3>My Posts</h3>
            <p>
                <?php
                    $postInfo->fetchContent($userId);
                ?>
            </p>
        </div>
      </div>
    </div>

</body>
</html>