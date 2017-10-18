<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 18/10/2017
 * Time: 12:43
 */

    session_start();

    include("../Managers/SessionManager.php");

    if(session_status() == 2) {
        session_destroy();
    }

    include("../views/index.php");

?>