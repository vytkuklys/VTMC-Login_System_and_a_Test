<?php
    include_once 'header.php'
?>
<main>
    <h1>Welcome, can you pass a SQL quiz?</h1>
    <?php
    if(isset($_SESSION["useruid"])){
        echo "<a href="."quiz.php"." class="."quiz__btn".">Take a quiz!</a>";
    }else{
        echo "<h3>Login to find out!</h3>";
    }
    ?>
</main>
</body>

</html>