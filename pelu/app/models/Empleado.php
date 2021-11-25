<?php

namespace App\Models;

use PDO;
use Core\Model;

require_once 'core/Model.php';
class Empleado extends Model
{

    /*Método para buscar todos los registros*/
    public static function all()
    {
        //obtener conexión
        $db = Empleado::db();
        //preparar consulta
        $sql = "SELECT * FROM employee";
        //ejecutar
        //query para ejecutar la consulta
        $statement = $db->query($sql);
        //el resultado puede ser tomado usando las PDO
        //fetch recoge registro a registro. Si hay muchos, necesita un bucle
        //fetch_all recoge arrays
        $employee = $statement->fetchAll(PDO::FETCH_CLASS, Empleado::class);

        return $employee;
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
        $db = Empleado::db();
        $stmt = $db->prepare('SELECT * FROM employee WHERE id=:id');
        $stmt->execute(array(':id' => $id));
        //Para cargar un objeto Empleado debemos usar setFetchMode y fetch
        $stmt->setFetchMode(PDO::FETCH_CLASS, Empleado::class);
        $employee = $stmt->fetch(PDO::FETCH_CLASS);
        return $employee;
    }

    public function insert()
    {

        //hay que arreglar de aquí hacia abajo
        $db = Empleado::db();
        $stmt = $db->prepare('INSERT INTO employee(name, surname, email, details, birthdate, password, active, admin) VALUES(:name, :surname, :email, :details, :birthdate, :password, :active, :admin)');
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':surname', $this->surname);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':details', $this->details);
        $stmt->bindValue(':birthdate', $this->birthdate);
        $stmt->bindValue(':password', $this->password);
        $stmt->bindValue(':active', $this->active);
        $stmt->bindValue(':admin', $this->admin);
        return $stmt->execute();
    }

    public function save()
    {
        $db = Empleado::db();
        $stmt = $db->prepare('UPDATE services SET name = :name, surname = :surname, email = :email, details = :details, birthdate = :birthdate, password = :password, active = :active, admin = :admin WHERE id = :id');
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':surname', $this->surname);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':details', $this->details);
        $stmt->bindValue(':birthdate', $this->birthdate);
        $stmt->bindValue(':password', $this->password);
        $stmt->bindValue(':active', $this->active);
        $stmt->bindValue(':admin', $this->admin);
        return $stmt->execute();
    }
    public function delete()
    {
        $db = Empleado::db();
        $stmt = $db->prepare('DELETE FROM services WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        return $stmt->execute();
    }
}
