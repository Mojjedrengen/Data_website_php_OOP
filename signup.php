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
        </div>
      </div>
    </div>
</body>
</html>