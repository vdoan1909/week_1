<?php
interface Authenticatable {
    public function login($email, $password);

    public function logout();
}