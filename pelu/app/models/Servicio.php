<?php

namespace App\Models;

use PDO;
use Core\Model;

require_once 'core/Model.php';
class Servicio extends Model
{

    /*Método para buscar todos los registros*/
    public static function all()
    {
        //obtener conexión
        $db = Servicio::db();
        //preparar consulta
        $sql = "SELECT * FROM services";
        //ejecutar
        //query para ejecutar la consulta
        $statement = $db -> query($sql);
        //el resultado puede ser tomado usando las PDO
        //fetch recoge registro a registro. Si hay muchos, necesita un bucle
        //fetch_all recoge arrays
        $services = $statement->fetchAll(PDO::FETCH_CLASS, Servicio::class);
        
        return $services;
    }
}
