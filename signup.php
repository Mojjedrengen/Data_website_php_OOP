<?php
    include_once 'header.php';
?>

    <div id="content-container">
      <div id="main">
          <div class="container">
            <h2>Sign up</h2>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="email" placeholder="Email...">
                <br>
                <input type="text" name="uid" placeholder="Username...">
                <br>
                <input type="password" name="pwd" placeholder="Password...">
                <br>
                <input type="password" name="pwdrepeat" placeholder="Repeat password...">
                <br>
                <button type="submit" name="submit">Sign up</button>
            </form>
        </div>
      </div>
    </div>
</body>
</html>