<?php

namespace app\Models;
use app\Utils\Database;
use PDO;

class CoreModel 
{
    protected $id;


    // Function to get only informations about a flag or a continent
    public function find($id, $table)
    {
        $pdo = Database::getPDO();
       
        $sql = " 
        SELECT * FROM $table WHERE `id`= :id;
        ";

        $pdoStatement = $pdo->prepare($sql);

        $pdoStatement->bindValue (':id', $id, PDO::PARAM_INT);

        $pdoStatement->execute();

        $results = $pdoStatement->fetchObject(static::class);
        
        return $results;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

}
