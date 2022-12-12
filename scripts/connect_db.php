<?php
function sql_connect()
{
    $DATABASE_HOST = 'localhost';
    $DATABASE_PORT = 5432;
    $DATABASE_USER = 'postgres';
    $DATABASE_PASS = '19012002';
    $DATABASE_NAME = 'clothing_store';
    try {
        return new PDO("pgsql:host=$DATABASE_HOST;port=$DATABASE_PORT;dbname=$DATABASE_NAME;user=$DATABASE_USER;password=$DATABASE_PASS");
    } catch (PDOException $exception) {
        exit($exception);
    }
}
