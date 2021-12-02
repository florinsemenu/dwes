<?php

namespace App\Models;

use PDO;
use DateTime;
use Core\Model;

class Jugador extends Model
{
    public function __construct()
    {
        $this->nacimiento = DateTime::createFromFormat('Y-m-d H:i:s', $this->nacimiento);
    }

    public static function find($id)
    {
        //Completar
        $db = Jugador::db();
        $stmt = $db->prepare('SELECT * FROM jugadores WHERE id=:id');
        $stmt->execute(array(':id' => $id));
        $stmt->setFetchMode(PDO::FETCH_CLASS, Jugador::class);
        $jugador = $stmt->fetch(PDO::FETCH_CLASS);
        return $jugador;
    }
    public static function all()
    {
        //Completar
        $db = Jugador::db();
        $sql = "SELECT * FROM jugadores";
        $statement = $db->query($sql);
        $jugadores = $statement->fetchAll(PDO::FETCH_CLASS, Jugador::class);
        return $jugadores;
    }

    public function insert()
    {
        //Completar
        $db = Jugador::db();
        $stmt = $db->prepare('INSERT INTO jugadores(nombre, puesto, nacimiento) VALUES(:nombre, :puesto, :nacimiento)');
        $stmt->bindValue(':nombre', $this->nombre);
        $stmt->bindValue(':puesto', $this->puesto);
        $stmt->bindValue(':nacimiento', $this->nacimiento);
        return $stmt->execute();
    }

    public function save()
    {
        //Completar
        $db = Jugador::db();
        $stmt = $db->prepare('UPDATE jugadores SET nombre = :nombre, puesto = :puesto, nacimiento = :nacimiento WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':nombre', $this->nombre);
        $stmt->bindValue(':puesto', $this->puesto);
        $stmt->bindValue(':nacimiento', $this->nacimiento);
        return $stmt->execute();
    }
    public function quitar()
    {
        $db = Jugador::db();
        $stmt = $db->prepare('DELETE FROM jugadores WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        return $stmt->execute();
    }
}
