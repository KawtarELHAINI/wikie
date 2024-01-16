<?php 
require_once("../libraries/Database.php");
require_once("IHome.php");
require_once("../model/HomeModel.php");


class HomeService extends Database implements IHome {
    
    
    function displayWiki(){
        $pdo = $this->connect();
         
        $sql = "SELECT * FROM Wiki ORDER BY dateCreated DESC LIMIT 3";

        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $latestWikis = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $latestWikis;
    
}
function displayCat(){
    $pdo = $this->connect();
     
    $sql = "SELECT * FROM category ORDER BY idCategory DESC LIMIT 3";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $latestCategories = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $latestCategories;

}

}

?>
