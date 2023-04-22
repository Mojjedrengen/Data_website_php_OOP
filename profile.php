<?php
    include_once 'header.php';

    include "classes/dbh.classes.php";
    include "classes/profileinfo.classes.php";
    include "classes/profileinfo-view.classes.php";
    $profileInfo = new ProfileInfoView();
?>

    <div id="content-container">
      <div id="main">
          <div class="container">
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
        </div>
      </div>
    </div>

</body>
</html>