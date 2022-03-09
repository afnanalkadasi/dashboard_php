
<?php
       
       include('connection.php');
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
    width: 80%;
    padding:  15px 10rem;
    background-color: #fff;
    border-radius: 20px;
    margin: 10rem auto;
}
        </style>

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
                <a class="navbar-brand" href="category.php">Product and Category Table</a>
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
                        <a href="#" style=" font-size:20px; font-weight: bold; " > Product</a>
                    </li>
                    <br>
                    <br>
                    <br>
                    <li class="active">
                        <a href="category.php" style=" font-size:20px; font-weight: bold; " > Category</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        Category                         </h1>
                       
                    </div>
                </div>
                <!-- /.row -->


             <div class="col-lg-12">
                       <a href="addcat.php?action=addcat" type="button" class="btn btn-xs btn-info">Add New</a>
                                
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                       
                                        <th>Category Name</th>
                                       
                                       
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM categories';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                           
                            echo '<td>'. $row['Category_name'].'</td>';
                            
                           
                            echo '<td> <a type="button" class="btn btn-xs btn-info" href="show.php?action=edit & id='.$row['category_id'] . '" > SHOW </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-warning" href="edit_cat.php?action=edit & id='.$row['category_id'] . '"> EDIT </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger" href="del_cat.php?type=categories&delete & id=' . $row['category_id'] . '">DELETE </a> </td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
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
