<?php
namespace App\Services\Data;

class OrderDAO {
	
	private $conn;
	
	public function __construct($conn) {
		$this->conn = $conn;
	}
	
	public function addOrder($product, $customerID) {
		$sql = "INSERT INTO `orders` (`PRODUCT`, `CUSTOMER_ID`) VALUES ('$product', '$customerID');";
		
		if (mysqli_query($this->conn, $sql)) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
		}
	}
}
?>