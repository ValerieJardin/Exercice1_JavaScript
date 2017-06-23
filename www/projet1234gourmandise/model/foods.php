<?php

/**
 * Modèle de la table breakfasts.
 * Ce modèle est la réplique de la table.
 * Ici je la déclare
 * Le mot clé extends permet de dire que la classe breakfasts hérite de la classe database
 */
class breakfasts extends database {

    /**
     * Déclaration des champs de la table en attribut.
     * Dans une classe les variables globales sont appelées attributs
     * @var type 
     */
    public $id = 0;
    public $lastName = '';
    public $firstName = '';
    public $birthDate = '1900-01-01';
    public $address = '';
    public $postalCode = '';
    public $phoneNumber = '';
    public $id_tppdo1_departments = 0;

    /**
     * Déclaration de la méthode magique construct.
     * Le constructeur de la classe est appelé avec le mot clé new.
     */
    public function __construct() {
        parent::__construct();
        $this->connectDB();
    }

    /**
     * Méthode permettant de récupérer la liste des utilisateurs de la table breakfasts.
     * @return Array
     */
    public function getBreakfastsListByService() {
        $query = 'SELECT `us`.`id`, CONCAT(`us`.`lastName`," ", `us`.`firstName`) AS `name`, `birthDate`, CONCAT(`us`.`address`," ", `us`.`postalCode`) AS `address`, `us`.`phoneNumber`, `dep`.`name` AS `serviceName` FROM `tppdo1_breakfasts` AS `us` INNER JOIN `tppdo1_departments` AS `dep` ON `us`.`id_tppdo1_departments` = `dep`.`id`';
        if ($this->id_tppdo1_departments == 0) {
            $queryResult = $this->pdo->query($query);
        } else {
            $query .= ' WHERE `id_tppdo1_departments` = :id_tppdo1_departments';
            $queryResult = $this->pdo->prepare($query);
            $queryResult->bindValue(':id_tppdo1_departments', $this->id_tppdo1_departments, PDO::PARAM_INT);
            $queryResult->execute();
        }
        return $queryResult->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * Méthode permettant de supprimer un utilisateur
     * @return boolean
     */
    public function deleteBreakfast() {
        $query = 'DELETE FROM `tppdo1_breakfasts` WHERE `id` = :id';
        $queryResult = $this->pdo->prepare($query);
        $queryResult->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $queryResult->execute();
    }
    
    /**
     * Méthode permettant d'ajouter un nouvel utilisateur
     * @return boolean
     */
    public function addBreakfast(){
        $query = 'INSERT INTO `tppdo1`.`tppdo1_breakfasts` (`id`, `lastName`, `firstName`, `birthDate`, `address`, `postalCode`, `phoneNumber`, `id_tppdo1_departments`) VALUES (NULL, UPPER(:lastName), :firstName, STR_TO_DATE(:birthDate, \'%d/%m/%Y\'), :address, :postalCode, REPLACE(:phoneNumber, \'.\',\'\'), :id_tppdo1_departments);';
        $queryResult = $this->pdo->prepare($query);
        $queryResult->bindValue(':lastName', $this->lastName, PDO::PARAM_STR);
        $queryResult->bindValue(':firstName', $this->firstName, PDO::PARAM_STR);
        $queryResult->bindValue(':birthDate', $this->birthDate, PDO::PARAM_STR);
        $queryResult->bindValue(':address', $this->address, PDO::PARAM_STR);
        $queryResult->bindValue(':postalCode', $this->postalCode, PDO::PARAM_STR);
        $queryResult->bindValue(':phoneNumber', $this->phoneNumber, PDO::PARAM_STR);
        $queryResult->bindValue(':id_tppdo1_departments', $this->id_tppdo1_departments, PDO::PARAM_INT);
        return $queryResult->execute();
    }

}
