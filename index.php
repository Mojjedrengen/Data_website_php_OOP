<?php
    include_once 'header.php';
?>

    <div id="content-container">
      <div id="main">
          <div class="container">
            <?php
                if (isset($_SESSION["userid"])) {
                    echo '<h1> Welcome ' .$_SESSION["useruid"] .'</h1>';
                } else {
                    echo '<h1>Please log in</h1>';
                }
            ?>
        </div>
      </div>
    </div>

</body>
</html>