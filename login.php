<?php
    include_once 'header.php';
?>

    <div id="content-container">
      <div id="main">
          <div class="container">
            <h2>Log in</h2>
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username/Email...">
                <br>
                <input type="password" name="pwd" placeholder="Password...">
                <br>
                <button type="submit" name="submit">Log in</button>
            </form>

            <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyinput") {
                        echo "<p>Fill in all fields!</p>";
                    } elseif ($_GET["error"] == "wrongpassword") {
                        echo "<p>Incorrect password!</p>";
                    } elseif ($_GET["error"] == "usernotfound") {
                        echo "<p>User not found!</p>";
                    } elseif ($_GET["error"] == "stmtfailed") {
                        echo "<p>Something went wrong, try again!</p>";
                    }
                }
            ?>
        </div>
      </div>
    </div>

</body>
</html>