<?php 
require_once(__DIR__."\check_function.php");
session_start();
?>
<pre>
    <?php 
        echo(print_r($_POST));
    ?>
</pre>