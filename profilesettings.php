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
            <h1>Change your profile here</h1>
            <form action="includes/profileinfo.inc.php" method="post">
                <textarea name="about" cols="30" rows="10" placeholder="Profile about section..."><?php $profileInfo->fetchAbout($_SESSION["userid"]); ?></textarea>
                <br><br>
                <p>Change your profile page intro here!</p>
                <input type="text" name="introtitle" placeholder="Profile title..." value="<?php $profileInfo->fetchTitle($_SESSION["userid"]); ?>">
                <br>
                <textarea name="introtext" cols="30" rows="10" placeholder="Profile introduction..."><?php $profileInfo->fetchText($_SESSION["userid"]); ?></textarea>
                <br>
                <button type="submit" name="submit">SAVE</button>
            </form>
        </div>
      </div>
    </div>

</body>
</html>