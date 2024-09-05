<?php
require_once './interfaces/Authenticatable.php';
require_once './traits/Logger.php';

class User implements Authenticatable
{
    use Logger;
    protected $username;
    protected $email;
    protected $role;
    protected static $userCount = 0; 
    private $password;
    const ROLE_ADMIN = 'admin';
    const ROLE_MEMBER = 'member';

    public function __construct($username, $email, $password, $role = self::ROLE_MEMBER)
    {
        $this->username = $username;
        $this->email = $email;
        $this->setPassword($password);
        $this->role = $role;
        self::$userCount++;
    }

    public function __call($method, $agr){
        echo "phuong thuc $method khong ton tai";
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    final public function getRole()
    {
        return $this->role;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = self::hashPassword($password);
    }

    public function hashPassword($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public function login($email, $password)
    {
        if ($this->email === $email && password_verify($password, $this->password)) {
            $this->log('Dang nhap thanh cong');
            echo "<br>";
            echo "Dang nhap thanh cong!";
            return true;
        }

        echo "Dang nhap that bai.";
        return false;
    }

    public function logout()
    {
        $this->log('Dang xuat thanh cong');
        echo "<br>";
        echo 'Da dang xuat thanh cong';
    }

    public static function getUserCount()
    {
        return self::$userCount;
    }
}