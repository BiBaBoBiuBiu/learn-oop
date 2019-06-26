<?php
require 'vendor\autoload.php';
require 'example.php';

///**
// * 依赖注入
// * Interface Logger
// */
//interface Logger {
//
//    public function save ($message);
//}
//
//class FileLogger implements Logger {
//    public function save ($message) {
//        var_dump('logger into database'.$message);
//    }
//}
//
//class DatabaseLogger implements Logger {
//    public function save ($message) {
//        var_dump('logger into database'.' '.$message);
//    }
//}

//class User {
//    protected $logger;
//
//    public function __construct (Logger $logger) {
//        $this->logger = $logger;
//    }
//
//    public function register () {
//        $user = 'halsey';
//        $this->logger->save($user);
//    }
//}

//$user = new User(new DatabaseLogger());
$user->register();