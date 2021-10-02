<?php
namespace App\Services\Business;

use App\Services\Data\OrderDAO;
use App\Services\Data\CustomerDAO;
use mysqli;

class OrderService {
	private $mysql_host = "localhost";
	private $mysql_database = "activity2";
	private $mysql_user = "root";
	private $mysql_password = "root";
	private $customerID = 1;
	
	public function __construct() {
		
	}
	
	public function createOrder($firstName, $lastName, $product) {
		$conn = $this->newConnection();
		$orderDAO = new OrderDAO($conn);
		$customerDAO = new CustomerDAO($conn);
		
		// Beginning transaction
		mysqli::autocommit(FALSE);
		mysqli::begin_transaction();
		
		// Executing the query creations
		$customerDAO->addCustomer($firstName, $lastName);
		$orderDAO->addOrder($product, $this->customerID);
		
		// Commiting both queries to the database
		mysqli::commit();
	}
	
	private function newConnection() {
		$conn = mysqli_connect($this->mysql_host, $this->mysql_user, $this->mysql_password, $this->mysql_database);
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		return $conn;
	}
}