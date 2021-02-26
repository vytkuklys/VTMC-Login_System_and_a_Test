<?php
    include_once 'header.php'
?>
<main>
    <section class="form--flex">
        <h2>Sign Up</h2>
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="name" placeholder="Your name..."> <br>
            <input type="text" name="email" placeholder="Email..."> <br>
            <input type="text" name="uid" placeholder="Username..."> <br>
            <input type="password" name="pwd" placeholder="Password..."> <br>
            <input type="password" name="pwdrepeat" placeholder="Repeat the password..."> <br>
            <button type="submit" name="submit">Sign Up</button>
        </form>
        <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo "<p>Make sure to fill up all the fields!</p>";
            }else if($_GET["error"] == "invaliduid"){
                echo "<p>Choose a proper username!</p>";
            }else if($_GET["error"] == "invalidemail"){
                echo "<p>Choose a proper email!</p>";
            }else if($_GET["error"] == "invalidpassword"){
                echo "<p>Type in matching passwords!</p>";
            }else if($_GET["error"] == "usernametaken"){
                echo "<p>The username or email address is already taken!</p>";
            }else if($_GET["error"] == "stmtfailed"){
                echo "<p>Something went wrong try again!</p>";
            }else {
                echo "<p>Now you can login and take the test!</p>";
            }
        }
    ?>
    </section>
    
</main>
</body>

</html>