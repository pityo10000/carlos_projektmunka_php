<?php
require_once 'SiteBuilder.php';
require_once 'model/User.php';

class RegistrationView extends SiteBuilder {
    private $user = null;

    public function __construct() {
        parent::__construct('Regisztráció', 'registration.css');
    }

    function loadRegistrationPanel($user) {
        if (isset($user)) {
            $this->user = $user;
        } else {
            $this->user = new User();
        }
        $type = 'registration';
        include 'templates/userPanelTemplate.php';
    }

    public function __destruct() {
        parent::__destruct();
    }
}