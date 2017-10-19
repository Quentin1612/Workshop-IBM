<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 18/10/2017
 * Time: 12:43
 */

    session_start();

    include("../Managers/SessionManager.php");

    // starting session if is not already done
    if(session_status() == 2) {
        session_destroy();
    }

    // going back to the suscribing / loging page
    include("../views/index.php");

?>