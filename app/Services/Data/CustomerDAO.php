<?php
namespace App\Services\Data;
	
class CustomerDAO {
	
	private $conn;
	
	public function __construct($conn) {
		$this->conn = $conn;
	}
	
	public function addCustomer($firstName, $lastName) {
		$sql = "INSERT INTO `customer` (`FIRST_NAME`, `LAST_NAME`) VALUES ('$firstName, '$lastName');";
		
		if (mysqli_query($this->conn, $sql)) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
		}
	}
}
?>