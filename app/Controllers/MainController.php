<?php

namespace app\Controllers;
use app\Models\Flag;
use app\Models\Continent;

class Maincontroller extends CoreController
{
    // Function to get all flags
    public function home()
    {
        $flagModel = new Flag;
        $flagList = $flagModel->findAll();

        $this->show('home', ['flagList'=> $flagList]);
    }

    // Function to get a flag by its id
    public function details($id)
    {   
        $idFlag = $id['id'];
        $table = "flag";

        // Create an Object and take a method to get the right flag
        $flagModel = new Flag;
        $currentFlag = $flagModel->find($idFlag, $table);
        
        $this->show('details', ['currentFlag'=>$currentFlag]);
    }

    // Function to get all flags using API
    public function homeApi()
    {
        $this->show('homeApi');
    }

    // Function to get a nation using API
    public function nation($nation)
    {
        $this->show('detailsApi');
    }
    
    // Function to get continent list using API
    public function continentList()
    {
        $continentModel = new Continent;
        $continentList = $continentModel->findAll();

        $this->show('continentList', ['continentList'=>$continentList]);
    }

    // Function to get all nations by a continent (using API)
    public function flagList($id)
    {
        $continentId = $id['id'];
        $table = "continent";
        $continentModel = new Continent;
        $currentContinent = $continentModel->find($continentId, $table);
        
        $currentContinentName = $currentContinent->getName();
        
        $flagModel= new Flag;
        $flagList = $flagModel->findByContinent($currentContinentName);

        $this->show('flagBycontinent', ['flagList'=>$flagList]);
    }
}
