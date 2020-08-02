<?php
declare(strict_types=1);

trait AppUserAuthentication
{
    private string $_appUserName = 'Nicolay';
    private string $_appUserPassword = 'moscow';

    public function authenticate(string $userName, string $userPassword)
    {
        if ($this->_appUserName === $userName && $this->_appUserPassword === $userPassword) {
            echo 'пользователь приложения<br>';
        }
    }
}
