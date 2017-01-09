<?php

require_once 'database/DB.php';
require_once 'ger/Interfaces/Imodel.php';

class Merchandise extends DB implements Imodel{

	//Attributes
	private $id;
	private $merchandiseType;
	private $name;
	private $quantity;
	private $price;
	private $businessType;

	//Getters and Setters
	public function getId() {
		return $this->id;
	}

	public function getMerchandiseType() {
		return $this->merchandiseType;
	}

	public function getName() {
		return $this->name;
	}

	public function getQuantity() {
		return $this->quantity;
	}

	public function getPrice() {
		return $this->price;
	}

	public function getBusinessType() {
		return $this->businessType;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function setMerchandiseType($merchandiseType) {
		$this->merchandiseType = $merchandiseType;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function setQuantity($quantity) {
		$this->quantity = $quantity;
	}

	public function setPrice($price) {
		$this->price = $price;
	}

	public function setBusinessType($businessType) {
		$this->businessType = $businessType;
	}

	//Methods
	public function addMerchandise() {
		//Search the connection 
		$pdo = parent::getDB();

		//Prepare the add
		$stmt = $pdo->prepare("INSERT INTO merchandise (id, merchandise_type, name, quantity, price, business_type) VALUES (?, ?, ?, ?, ?, ?)");
		$stmt->bindValue(1, $this->getId(), PDO::PARAM_INT);
		$stmt->bindValue(2, $this->getMerchandiseType(), PDO::PARAM_STR);
		$stmt->bindValue(3, $this->getName(), PDO::PARAM_STR);
		$stmt->bindValue(4, $this->getQuantity(), PDO::PARAM_INT);
		$stmt->bindValue(5, $this->getPrice(), PDO::PARAM_STR);
		$stmt->bindValue(6, $this->getBusinessType(), PDO::PARAM_STR);

		//Execute the statement
		$stmt->execute();

		//Check the add merchandise
		if($stmt) {
			return true;
		} else {
			return false;
		}
	}

	public static function showAllMerchandise() {
		//Search the connection
		$pdo = parent::getDB();

		//Prepare the show
		$stmt = $pdo->prepare("SELECT * FROM merchandise ORDER BY id");

		//Execute the statement
		$stmt->execute();

		//Search the data
		$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

		//Return a array with all informations
		return $data;
	}
}