<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Grabbing the data
    $uid = htmlspecialchars($_POST["uid"], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');
    $firstname = htmlspecialchars($_POST["firstname"], ENT_QUOTES, 'UTF-8');
    $surname = htmlspecialchars($_POST["surname"], ENT_QUOTES, 'UTF-8');
    $gender = htmlspecialchars($_POST["gender"], ENT_QUOTES, 'UTF-8');
    $birthday = htmlspecialchars($_POST["birthday"], ENT_QUOTES, 'UTF-8');
    $country = htmlspecialchars($_POST["country"], ENT_QUOTES, 'UTF-8');
    $city = htmlspecialchars($_POST["city"], ENT_QUOTES, 'UTF-8');
    $address = htmlspecialchars($_POST["address"], ENT_QUOTES, 'UTF-8');
    $phonenumber = htmlspecialchars($_POST["phonenumber"], ENT_QUOTES, 'UTF-8');
    $pwd = htmlspecialchars($_POST["pwd"], ENT_QUOTES, 'UTF-8');
    $pwdrepeat = htmlspecialchars($_POST["pwdrepeat"], ENT_QUOTES, 'UTF-8');    

    // Instantiate SignupContr class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new SignupContr($uid, $email, $firstname, $surname, $gender, $birthday, $country, $city, $address, $phonenumber, $pwd, $pwdrepeat);

    // Running error handlers and user signup
    $signup->signupUser();

    $userId = $signup->fetchUserId($uid);

    // Instantiate ProfileInfoContr class
    include "../classes/profileinfo.classes.php";
    include "../classes/profileinfo-contr.classes.php";
    $profileInfo = new ProfileInfoContr($userId, $uid);
    $profileInfo->defaultProfileInfo();

    
    // Log in after sign up
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";
    $login = new LoginContr($uid, $pwd,);

    // Running error handlers and user Login
    $login->loginUser();

    // Going back to front page
    header("location: ../index.php?error=none");
}   