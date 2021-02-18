<?php

namespace app\Models;
use PDO;
use app\Utils\Database;

class Continent extends CoreModel
{
    private $name;

    /**
     * Get the value of name
     */ 
    public function getName()
    {
    return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
    $this->name = $name;

    return $this;
    }

// Function to get all elements of the table
    public function findAll()
    {
        $pdo = Database::getPDO();
       
        $sql = ' 
        SELECT * FROM `continent`;
        ';

        $pdoStatement = $pdo->query($sql);
    
        $continentList = $pdoStatement->fetchAll(PDO::FETCH_CLASS, static::class);
        
        return $continentList;
    }



}
