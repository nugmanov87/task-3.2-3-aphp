<?php
declare(strict_types=1);


trait MobileUserAuthentication
{
    private string $_mobileUserName = 'Victor';
    private string $_mobileUserPassword = 'corona';

    public function authenticate(string $userName, string $userPassword)
    {
        if ($this->_mobileUserName === $userName && $this->_mobileUserPassword === $userPassword) {
            echo 'пользователь мобильного приложения<br>';
        }
    }
}