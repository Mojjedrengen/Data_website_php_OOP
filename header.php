<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <div class="header">
            <div class="inner_header">
                <div class="logo_container">
                <h1>Hello</h1>
                </div>

                <ul class="navigation">
                    <a href="index.php"><li>Home</li></a>
                    <?php
                        if (isset($_SESSION["userid"])) {
                            ?>
                            <a href="profile.php"><li><?php echo $_SESSION["useruid"]; ?></li></a>
                            <a href="includes/logout.inc.php"><li>Log out</li></a>
                        <?php } else { ?>
                           <a href="signup.php"><li>Sign up</li></a>
                            <a href="login.php"><li>Log in</li></a>
                        <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>