<?php

require_once LIB_PATH.'/Plugin/Component.php';

class Plugins_Admin_TestPlugin_TestPlugin extends OX_Component
{

    function afterLogin()
    {
        global $userLoggedIn;
        $userLoggedIn = true;
        return true;
    }

}

?>