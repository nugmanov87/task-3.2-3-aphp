<?php


namespace User;

use AppUserAuthentication;
use MobileUserAuthentication;

class User
{
    use AppUserAuthentication, MobileUserAuthentication {
        MobileUserAuthentication::authenticate insteadof AppUserAuthentication;
        AppUserAuthentication::authenticate as auth;
    }
}