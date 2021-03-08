<?php

namespace app\Models;
use PDO;
use app\Utils\Database;
use app\Models\CoreModel;

class Flag extends CoreModel
{
    private $nation;
    private $flag;
    private $motto;
    private $capitale;
    private $continent;
    


    // Function to get only informations about a flag
    public function findByContinent($continent)
    {
        $pdo = Database::getPDO();
        
        $sql = " 
        SELECT * FROM `flag` WHERE `continent`= :continent;
        ";

        $pdoStatement= $pdo->prepare($sql);

        $pdoStatement->bindValue (':continent', $continent, PDO::PARAM_STR);

        $pdoStatement->execute();

        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, static::class);
        
        return $results;
    }

    // Function to get all flags (all the table)
    public function findAll()
    {
        $pdo = Database::getPDO();
       
        $sql = ' 
        SELECT * FROM `flag`;
        ';

        $pdoStatement = $pdo->query($sql);
    
        $flagList = $pdoStatement->fetchAll(PDO::FETCH_CLASS, static::class);
        
        return $flagList;
    }



    /**
     * Get the value of nation
     */ 
    public function getNation()
    {
        return $this->nation;
    }

    /**
     * Set the value of nation
     *
     * @return  self
     */ 
    public function setNation($nation)
    {
        $this->nation = $nation;

        return $this;
    }

    /**
     * Get the value of flag
     */ 
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * Set the value of flag
     *
     * @return  self
     */ 
    public function setFlag($flag)
    {
        $this->flag = $flag;

        return $this;
    }

    /**
     * Get the value of motto
     */ 
    public function getMotto()
    {
        return $this->motto;
    }

    /**
     * Set the value of motto
     *
     * @return  self
     */ 
    public function setMotto($motto)
    {
        $this->motto = $motto;

        return $this;
    }

    /**
     * Get the value of capitale
     */ 
    public function getCapitale()
    {
        return $this->capitale;
    }

    /**
     * Set the value of capitale
     *
     * @return  self
     */ 
    public function setCapitale($capitale)
    {
        $this->capitale = $capitale;

        return $this;
    }

    /**
     * Get the value of continent
     */ 
    public function getContinent()
    {
        return $this->continent;
    }

    /**
     * Set the value of continent
     *
     * @return  self
     */ 
    public function setContinent($continent)
    {
        $this->continent = $continent;

        return $this;
    }

    

    