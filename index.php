<?php
require_once __DIR__ . '/classes/MySQLConnection.php';
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/Admin.php';

// $connect = new MySQLConnection('localhost', 'task_week_1', 'root', '');
// $connect->connect();

$member = new User('member', 'member@gmail.com', 'member');
// $member->login('member@gmail.com', 'member');
// $member->logout();
// echo $member->getPassword();
// echo $member->getRole();
// echo $member->getUserCount();
// $member->hihi();

$admin = new Admin('admin', 'admin@gmail.com', 'admin');
$admin2 = new Admin('admin2', 'admin2@gmail.com', 'admin2');
// $admin->login('admin@gmail.com', 'admin');
// $admin->logout();
// echo $admin->showRole();
// $admin->displayUserCount();