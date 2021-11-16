<?php

namespace Core;
//solicitamos el archivo con user y pass para conectar a la BBDD
require_once 'config/db.php';
//usamos las constantes que hay declaradas en ese archivo
use const Config\DSN;
use const Config\USER;
use const Config\PASSWORD;

//necesario para referirnos a la bbdd
use PDO;
use PDOException;

class Model
{
    function __construct()
    {
    }
    protected static function db()
    {
        try {
            $db = new PDO(DSN, USER, PASSWORD);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }
        return $db;
    }
}
