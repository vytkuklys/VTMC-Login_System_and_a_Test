<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Quiz</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <?php
                        if(isset($_SESSION["useruid"])){
                            echo "<li><a href='stats.php'>Statistics</a></li>";
                            echo "<li><a href='quiz.php'>Take a quiz</a></li>";
                            echo "<li><a href='includes/logout.inc.php'>Log Out</a></li>";
                        }else{
                            echo "<li><a href='signup.php'>Sign Up</a></li>";
                            echo "<li><a href='login.php'>Log In</a></li>";
                        }
                    ?>
                </ul>
            </nav>
        </header>
</html>