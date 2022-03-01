<?php
include_once 'database.php';

class advert extends database {
    private $db;
    public $id ="";
    public $title = "";
    public $description = "";
    public $postal_code = "";
    public $city = "";
    public $type = "";
    public $price = "";
    public $reservation_message = "";

    public function __construct(){
        $db = database::getInstance();
        $this->db = $db->getDbh();
    }

    public function createAdvert(){
        $request = 'INSERT INTO advert (title, description, postal_code,city,type,price) 
                    VALUES (:title, :description, :postal_code,:city, :type,:price)';
        $statement = $this->db->prepare($request);
        $statement->bindValue(':title', $this->title, PDO::PARAM_STR);
        $statement->bindValue(':description', $this->description, PDO::PARAM_STR);
        $statement->bindValue(':postal_code', $this->postal_code, PDO::PARAM_STR);
        $statement->bindValue(':city', $this->city, PDO::PARAM_STR);
        $statement->bindValue(':type', $this->type, PDO::PARAM_STR);
        $statement->bindValue(':price', $this->price, PDO::PARAM_STR);
        return $statement->execute();
    }
    public function getAdverts(){
        $request = 'SELECT id,title,description,postal_code,city,type,price,reservation_message FROM advert';
        $statement = $this->db->prepare($request);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAdvert(){
        $request = 'SELECT id,title,description,postal_code,city,type,price,reservation_message FROM advert WHERE id=:id';
        $statement = $this->db->prepare($request);
        $statement->bindValue(':id', $this->id, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function reserveAdvert(){
        $request = 'UPDATE advert SET reservation_message=:reservation_message WHERE id=:id';
        $statement = $this->db->prepare($request);
        $statement->bindValue(':id', $this->id, PDO::PARAM_INT);
        $statement->bindValue(':reservation_message', $this->reservation_message, PDO::PARAM_STR);
        $statement->execute();
    }

    public function getAdvertsOrdered(){
        $request = 'SELECT id,title,description,postal_code,city,type,price,reservation_message FROM advert ORDER BY id DESC';
        $statement = $this->db->prepare($request);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}