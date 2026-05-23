<?php


require_once __DIR__ . '/app.php';

const DB_HOST = '127.0.0.1';
const DB_PORT = '3306';
const DB_NAME = 'ttc_college_system';
const DB_USER = 'root';
const DB_PASS = '';

function db(): mysqli
{
    static $connection = null;

    if ($connection instanceof mysqli) {
        return $connection;
    }

    $connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, (int) DB_PORT);

    if ($connection->connect_error) {
        throw new RuntimeException('Database connection failed: ' . $connection->connect_error);
    }

    $connection->set_charset('utf8mb4');

    return $connection;
}
