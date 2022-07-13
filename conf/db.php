<?php

/**
 ** Класс конфигурации базы данных
 */
class DB{

    const USER = "u0016495_cabinet";
    const PASS = 123456;
    const HOST = "localhost";
    const DB   = "u0016495_cabinet";

    public static function connToDB() {

        $user = self::USER;
        $pass = self::PASS;
        $host = self::HOST;
        $db   = self::DB;

        $conn = new PDO("mysql:dbname=$db;host=$host", $user, $pass);
        return $conn;

    }
}