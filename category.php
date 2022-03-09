

<?php

class Categories
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

    // Insert categories data into categories table
    public function insertData($post)
    {
        $cname = $this->con->real_escape_string($_POST['categoryname']);

        $query="INSERT INTO categories(Category_name) VALUES('$cname')";
        $sql = $this->con->query($query);
        if ($sql==true) {
            header("Location:category_index.php?msg1=insert");
        }else{
            echo "Registration failed try again!";
        }
    }

    // Fetch categories categories for show listing
    public function displayData()
    {
        $query = "SELECT * FROM categories";
        $result = $this->con->query($query);
    if ($result->num_rows > 0) {
        $data = array();
        while ($row = $result->fetch_assoc()) {
               $data[] = $row;
        }
         return $data;
        }else{
         echo "No found categories";
        }
    }

    // Fetch single data for edit from categories table
    public function displyaCategoryById($id)
    {
        $query = "SELECT * FROM categories WHERE category_id  = '$id'";
        $result = $this->con->query($query);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row;
        }else{
        echo "categories not found";
        }
    }

    // Update categories data into categories table
    public function updateCategory($postData)
    {
        $cname = $this->con->real_escape_string($_POST['uCategory_name']);

        $id = $this->con->real_escape_string($_POST['id']);
    if (!empty($id) && !empty($postData)) {
        $query = "UPDATE categories SET  Category_name = '$cname' WHERE category_id  = '$id'";
        $sql = $this->con->query($query);
        if ($sql==true) {
            header("Location:category_index.php?msg2=update");
        }else{
            echo "Registration updated failed try again!";
        }
        }
    }


    public function deleteCategory($id)
    {
        $query = "DELETE FROM categories WHERE category_id  = '$id'";
        $sql = $this->con->query($query);
    if ($sql==true) {
        header("Location:category_index.php?msg3=delete");
    }else{
        echo "category does not delete try again";
        }
    }

}
?>