<?php

class Home
{

    private $latestWikis;
    private $latestCategories;
   
   
    


    public function __construct()
    {

       
    }

    public function getLatestWikis()
    {
        return $this->latestWikis;
    }
    public function setLatestWikis($latestWikis)
    {
        $this->$latestWikis = $latestWikis;
    }
    public function getLatestCategories()
    {
        return $this->latestCategories;
    }
    public function setLatestCategories($latestCategories)
    {
        $this->$latestCategories= $latestCategories;
    }
  

}
?>
