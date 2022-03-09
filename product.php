<?php

	class Product
	{
		private $servername = "localhost";
		private $username   = "root";
		private $password   = "";
		private $database   = "dashboard";
		public  $con;


		// Database Connection 
		public function __construct()
		{
		    $this->con = new mysqli($this->servername, $this->username,$this->password,$this->database);
		    if(mysqli_connect_error()) {
			 trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
		    }else{
			return $this->con;
		    }
		}

		// Insert Product data into Product table
		public function insertData($post)
		{
			$name = $this->con->real_escape_string($_POST['productname']);
			$cname = $this->con->real_escape_string($_POST['categoryname']);
			$price = $this->con->real_escape_string($_POST['price']);
			
			$query="INSERT INTO Product(Product_name,Category_name,Price) VALUES('$name','$cname','$price')";
			$sql = $this->con->query($query);
			if ($sql==true) {
			    header("Location:index.php?msg1=insert");
			}else{
			    echo "Registration failed try again!";
			}
		}

		// Fetch Product Product for show listing
		public function displayData()
		{
		    $query = "SELECT * FROM Product";
		    $result = $this->con->query($query);
		if ($result->num_rows > 0) {
		    $data = array();
		    while ($row = $result->fetch_assoc()) {
		           $data[] = $row;
		    }
			 return $data;
		    }else{
			 echo "No found Product";
		    }
		}

		// Fetch single data for edit from Product table
		public function displyaProductById($id)
		{
		    $query = "SELECT * FROM Product WHERE Product_id  = '$id'";
		    $result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		    }else{
			echo "Product not found";
		    }
		}

		// Update Product data into Product table
		public function updateProduct($postData)
		{
		    $name = $this->con->real_escape_string($_POST['uProduct_name']);
		    $cname = $this->con->real_escape_string($_POST['uCategory_name']);
            $price = $this->con->real_escape_string($_POST['uPrice']);

		    $id = $this->con->real_escape_string($_POST['id']);
		if (!empty($id) && !empty($postData)) {
			$query = "UPDATE Product SET Product_name = '$name', Category_name = '$cname', Price = '$price' WHERE Product_id  = '$id'";
			$sql = $this->con->query($query);
			if ($sql==true) {
			    header("Location:index.php?msg2=update");
			}else{
			    echo "Registration updated failed try again!";
			}
		    }
		}


		// Delete Product data from Product table
		public function deleteProduct($id)
		{
		    $query = "DELETE FROM Product WHERE Product_id  = '$id'";
		    $sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:index.php?msg3=delete");
		}else{
			echo "Product does not delete try again";
		    }
		}

	}
?>