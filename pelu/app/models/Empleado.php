<?php

namespace App\Models;

use PDO;
use DateTime;
use Core\Model;

use const Config\PASSWORD;

require_once 'core/Model.php';
class Empleado extends Model
{
    public function __construct()
    {
        $this->birthdate = DateTime::createFromFormat('Y-m-d', $this->birthdate);
    }

    /*Método para buscar todos los registros*/
    public static function all()
    {
        //obtener conexión
        $db = Empleado::db();
        //preparar consulta
        $sql = "SELECT * FROM employees";
        //ejecutar
        //query para ejecutar la consulta
        $statement = $db->query($sql);
        //el resultado puede ser tomado usando las PDO
        //fetch recoge registro a registro. Si hay muchos, necesita un bucle
        //fetch_all recoge arrays
        $employees = $statement->fetchAll(PDO::FETCH_CLASS, Empleado::class);

        return $employees;
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
        $stmt = $db->prepare('SELECT * FROM employees WHERE id=:id');
        $stmt->execute(array(':id' => $id));
        //Para cargar un objeto Empleado debemos usar setFetchMode y fetch
        $stmt->setFetchMode(PDO::FETCH_CLASS, Empleado::class);
        $employee = $stmt->fetch(PDO::FETCH_CLASS);
        return $employee;
    }

    public static function findbyEmail($email)
    {
        $db = Empleado::db();
        $stmt = $db->prepare('SELECT * FROM employees WHERE email=:email');
        $stmt->execute(array(':email' => $email));
        $stmt->setFetchMode(PDO::FETCH_CLASS, Empleado::class);
        $employee = $stmt->fetch(PDO::FETCH_CLASS);
        return $employee;
    }
    //me he quedado aquí
    //TIENES QUE ACABAR LO DEL SET PASSWORD Y LO DEMÁS(PARA ACABAR LO DEL LOGIN);
    public function setPassword($password)
    {
        $password = password_hash($password, PASSWORD_BCRYPT);
        $db = Empleado::db();
        $stmt = $db->prepare('UPDATE employees SET password = :password WHERE id = ::id');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':password', $password);
        $stmt->execute();
        return $password;
    }
    public function passwordVerify($password, $employee)
    {
        return password_verify($password, $employee->password);
    }
    public function insert()
    {
        $db = Empleado::db();
        $stmt = $db->prepare('INSERT INTO employees(name, surname, email, details, birthdate, password, active, admin) VALUES(:name, :surname, :email, :details, :birthdate, :password, :active, :admin)');
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
        $stmt = $db->prepare('UPDATE employees SET name = :name, surname = :surname, email = :email, 
        details = :details, birthdate = :birthdate, password = :password, 
        active = :active, admin = :admin WHERE id = :id');
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
        $stmt = $db->prepare('DELETE FROM employees WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        return $stmt->execute();
    }
}
