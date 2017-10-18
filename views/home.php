<?php
    include_once("../Managers/SessionManager.php");
    if(SessionManager::checkSession()) {
        ?>

        <?php
    }
?>