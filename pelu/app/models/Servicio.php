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
        $statement = $db->query($sql);
        //el resultado puede ser tomado usando las PDO
        //fetch recoge registro a registro. Si hay muchos, necesita un bucle
        //fetch_all recoge arrays
        $services = $statement->fetchAll(PDO::FETCH_CLASS, Servicio::class);

        return $services;
    }

    /*
    * El método find usa funciones preparadas
    * Este método carga un registro a partir de su id
    * Paso de parámetros:
    *   a) pasando un array en el execute
    *   b) método bindParam: se para una variable
    *   c) método bindValue: un literal o el valor de una variable
    */
    public static function find($id)
    {
        $db = Servicio::db();
        $stmt = $db->prepare('SELECT * FROM services WHERE id=:id');
        $stmt->execute(array(':id' => $id));
        //Para cargar un objeto Servicio debemos usar setFetchMode y fetch
        $stmt->setFetchMode(PDO::FETCH_CLASS, Servicio::class);
        $service = $stmt->fetch(PDO::FETCH_CLASS);
        return $service;
    }

    public function insert()
    {
        $db = Servicio::db();
        $stmt = $db->prepare('INSERT INTO services(id, name, detail, price) VALUES(:id, :name, :detail, :price)');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':detail', $this->detail);
        $stmt->bindValue(':detail', $this->price);
        return $stmt->execute();
    }

    public function save()
    {
        $db = Servicio::db();
        $stmt = $db->prepare('UPDATE services SET id = :id, name = :name, detail = :detail, price = :price WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':detail', $this->detail);
        $stmt->bindValue(':price', $this->price);
        return $stmt->execute();
    }
    public function delete()
    {
        $db = Servicio::db();
        $stmt = $db->prepare('DELETE FROM services WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        return $stmt->execute();
    }
}
