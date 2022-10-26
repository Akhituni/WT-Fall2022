<?php
session_start();

?>
welcome back!
<h1>
    <?php
    echo $_SESSION["name"];
    ?>
</h1> 
<br> <br>
<a href="logut.php"> logout</a>