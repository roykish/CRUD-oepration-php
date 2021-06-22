
<?php

    $mysqli = new mysqli('localhost', 'root', '', 'crud' ) or die (mysqli_error($mysqli));  //connect database 

    $result = $mysqli->query(" SELECT * FROM data ") or die($mysqli->error); //query to fetch data from the table which is needed to show on this page.

?>

<div class="container">
    <div class="d-flex align-items-center" style = "height:100vh">

        <div class="row w-100">
            <div class="col-md-4">
                <!--This is the form for adding data-->
                <div class="">
                    <form action="inc/data_entry.php" method="POST" class="p-4 shadow bg-body rounded" >  
                        <h4 class="display-4 text-center">Login</h4><hr><br>
                        <div class="form-group">
                            <label for="fullname">Fullname</label>
                            <input type="text" class="form-control" id="fullname"  placeholder="Enter full name" name="fullname">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="username" name="username">
                        </div>
                            <button type="submit" class="btn btn-primary d-block mr-0 ml-auto" name="submit">Submit</button>
                    </form>
                
                </div>
                <!--Form ends here-->
            </div>
            <div class="col-md-8 pl-5">
                <table class="table">    <!--This table displays all the data fetched from database-->
                    <thead>
                        <tr>
                            <th>Fullname</th>
                            <th>Username</th>
                            <th colspan="2" class="text-center">Action</th>
                        </tr>
                    </thead>

                    <!-- -----------------------------Starts a while loop here to fetch all the data from the database and show them on the table.  ------------------------ -->

                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td>
                                <?php echo $row['fullname'];?>
                            </td>

                            <td>
                                <?php echo $row['username'];?>
                            </td>
                            <td class="text-center">
                            <a href="index.php?edit=<?php echo $row['id'];?>"
                                class = "btn btn-warning">Edit</a>
                            <a href="inc/delete_record.php?delete=<?php echo $row['id'];?>"
                                class = "btn btn-info">Delete</a>
                            

                            </td>
                        </tr>
                    <?php endwhile; ?>

                    <!-- ------------------------------------------------------while loop ends here ------------------------------------------------>

                </table>        <!--Table for displaying data, ends here -->
            </div>
        </div>
        
    </div>  
</div>      




