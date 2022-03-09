
<?php
       
      // Include database file
  include 'product.php';

  $productObj = new Product();

  if(isset($_POST['submit'])) {
    $productObj->insertData($_POST);
  }


       include('header.php');
       
        ?>  
        
   <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
            <script src="main.js"></script>
        </head>
        <style>
        #page-wrapper {
    width: 60%;
    padding:  15px auto;
    background-color: #fff;
    border-radius: 20px;
    margin: 10rem auto;
}
        </style>
       <body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
 
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php" style="color:#00e7ff; font-size:30px; "><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <br>
                    <br>
                    <br>
                    <li class="active">
                        <a href="index.php" style=" font-size:20px; font-weight: bold; " > Product</a>
                    </li>
                    <br>
                    <br>
                    <br>
                    <li class="active">
                    <a href="category_index.php" style=" font-size:20px; font-weight: bold; " > Category</a>
                                        </li>
                </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

    
            <!-- /.row -->


         <div class="col-lg-12">
              <h2>Add new Product</h2>
                  <div class="col-lg-6">

                    <form role="form" method="post" action="add.php">
                        
                        <div class="form-group">
                          <input class="form-control" placeholder="Product Name" name="productname">
                        </div>
                        <div class="form-group">
                          <input class="form-control" placeholder="Category Name" name="categoryname">
                        </div> 
                        <div class="form-group">
                          <input class="form-control" placeholder="price" name="price">
                        </div> 

                        <button type="submit" name="submit" class="btn btn-default">Save Product</button>
                        <button type="reset" class="btn btn-default">Clear Entry</button>


                  </form>  
                </div>
            </div>
            
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="js/plugins/morris/raphael.min.js"></script>
<script src="js/plugins/morris/morris.min.js"></script>
<script src="js/plugins/morris/morris-data.js"></script>

</body>
        </html>




