<?php
    include_once 'header.php';
?>

    <div id="content-container">
      <div id="main">
          <div class="container">
            <h2>Sign up</h2>
            <form action="includes/signup.inc.php" method="post">
                <input type="email" name="email" placeholder="Email...">
                <br>
                <input type="text" name="uid" placeholder="Username...">
                <br>
                <input type="text" name="firstname" placeholder="First name...">
                <input type="text" name="surname" placeholder="Surname...">
                <br>
                <label for="birthday">Enter your birthday:</label><br>
                <input type="date" name="birthday" id="birthday" placeholder="Birthday...">
                <br>
                <input type="text" name="country" placeholder="Country...">
                <br>
                <input type="text" name="city" placeholder="Zip number...">
                <br>
                <input type="text" name="address" placeholder="Address...">
                <br>
                <input type="text" name="phonenumber" placeholder="Phone number...">
                <br>
                <input type="password" name="pwd" placeholder="Password...">
                <br>
                <input type="password" name="pwdrepeat" placeholder="Repeat password...">
                <br>
                <input type="radio" name="gender" id="male" value="male">
                <label for="male">Male</label><br>
                <input type="radio" name="gender" id="female" value="female">
                <label for="female">Female</label><br>
                <input type="radio" name="gender" id="nb" value="nonbinary">
                <label for="nb">Non binary</label><br>
                <input type="radio" name="gender" id="other" value="other">
                <label for="other">Other</label><br>
                <button type="submit" name="submit">Sign up</button>
            </form>

            <?php
              if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                  echo "<p>Fill in all fields!</p>";
                } else if ($_GET["error"] == "invalidphone") {
                  echo "<p>Invalid phone number!</p>";
                } else if ($_GET["error"] == "invalidzipcode") {
                  echo "<p>Invalid zipcode!</p>";
                } else if ($_GET["error"] == "username") {
                  echo "<p>Invalid username!</p>";
                } else if ($_GET["error"] == "email") {
                  echo "<p>Invalid email!</p>";
                } else if ($_GET["error"] == "passwordmatch") {
                  echo "<p>Passwords don't match!</p>";
                } else if ($_GET["error"] == "useroremailtaken") {
                  echo "<p>Username or email is taken!</p>";
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