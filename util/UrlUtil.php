<?php

class UrlUtil
{
    const MAIN_URL = 'index.php';

    #POST operations
    const OPERATION_LOGIN = 'login';
    const OPERATION_REGISTER = 'register';
    const OPERATION_USER_SETTINGS_SAVE = 'userSettingsSave';
    const OPERATION_FORGOTTEN_PASSWORD = 'forgottenPassword';

    #GET navigations
    const NAV_LOGIN = 'login';
    const NAV_LOGOUT = 'logout';
    const NAV_REGISTRATION = 'registration';
    const NAV_FORGOTTEN_PASSWORD = 'forgottenPassword';
    const NAV_USER_SETTINGS = 'userSettings';

    static function getRoutedUrl($param) {
        return self::MAIN_URL . '?nav=' . $param;
    }

    static function redirectToUrl($param) {
        header('Location: ' . self::getRoutedUrl($param));
    }

    static function redirectHome() {
        header('Location: ' . self::MAIN_URL);
    }

    static function urlEquals($navParam) {
        if (isset($_GET['nav'])) {
            return $_GET['nav'] === $navParam;
        } else {
            return null;
        }
    }
}