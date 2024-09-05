<?php
class Admin extends User
{
    public function __construct($username, $email, $password)
    {
        parent::__construct($username, $email, $password, self::ROLE_ADMIN);
    }

    public function login($email, $password)
    {
        if ($this->email === $email && password_verify($password, $this->getPassword()) && $this->role === self::ROLE_ADMIN) {
            $this->log('Admin dang nhap thanh cong');
            echo "<br>";
            echo "Admin dang nhap thanh cong!";
            return true;
        }

        echo "Dang nhap that bai.";
        return false;
    }

    public function showRole()
    {
        return $this->getRole();
    }

    public static function displayUserCount()
    {
        echo "self: " . self::getUserCount();
        echo "<br>";
        echo "static: " . static::getUserCount();
    }
}