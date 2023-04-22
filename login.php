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
        </div>
      </div>
    </div>

</body>
</html>