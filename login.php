<?php
    include_once 'header.php'
?>
<main>
    <section class="form--flex">
        <h2>Log In</h2>
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username/Email..."> <br>
            <input type="password" name="pwd" placeholder="Password..."> <br>
            <button type="submit" name="submit">Log In</button>
        </form>
        <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo "<p>Make sure to fill up all the fields!</p>";
            }else if($_GET["error"] == "wrongLogin"){
                echo "<p>Login failed due to incorrect password and/or username!</p>";
            }
        }
    ?>
    </section>
</main>
</body>

</html>