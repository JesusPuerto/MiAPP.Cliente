<?php
class Database
{
    public static function Open()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=miapp;charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
    
}
?>