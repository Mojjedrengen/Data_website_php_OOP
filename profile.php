<?php
    include_once 'header.php';

    include "classes/dbh.classes.php";
    include "classes/profileinfo.classes.php";
    include "classes/profileinfo-view.classes.php";
    $profileInfo = new ProfileInfoView();
    include "classes/postinfo.classes.php";
    include "classes/postinfo-view.classes.php";
    $postInfo = new PostInfoView();
?>

    <div id="content-container">
      <div id="main">
          <div class="container">
            <!-- didn't get to make this work
            <form action="searchuser.php" method="GET">
              <input id="search" name="search" type="text" placeholder="Search Users">
              <input id="submit" type="submit" value="Search">
            </form>
-->
            <h3>ABOUT</h3>
            <p>
              <?php
                $profileInfo->fetchAbout($_SESSION["userid"]);
              ?>
            </p>

            <h3>
              <?php
                  $profileInfo->fetchTitle($_SESSION["userid"]);
                ?>
            </h3>
            <p>
              <?php
                  $profileInfo->fetchText($_SESSION["userid"]);
                ?>
            </p>
            <br>
            <a href="profilesettings.php">Change profile</a>
            <br><br>
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