  <?php include'adheader.php';?>
<?php ob_start();?>

        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">Basic Table</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="text-right upgrade-btn">
                            <a href="https://wrappixel.com/templates/xtremeadmin/" class="btn btn-danger text-white" target="_blank">Upgrade to Pro</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    
                    
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bloggy Users data</h4>
                                
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <td>Sr No</td>
                                        <td>Name</td>
                                        <td>Email</td>
                                        <td>Passsword</td>
                                        <td>Gender</td>
                                        <td>Update</td>
                                        <td>Delete</td>
                                    </tr>
                                    </thead>
                                    <tbody>
<?php 
     $connection = mysqli_connect('localhost','root','','my_project');

     if($connection)
     {


        $read_query = "SELECT * FROM users";
       
        $result = mysqli_query($connection,$read_query);

        if($result)
        {
            $i=1;
            while($row = mysqli_fetch_array($result))
            {
              $id = $row['id'];
              $name = $row['user_name'];
              $user_email = $row['user_email'];
              $user_password = $row['user_password'];
              $gender = $row['gender'];
            ?>
                <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $name;?></td>
                <td><?php echo $user_email;?></td>
                <td><?php echo $user_password;?></td>
                <td><?php echo $gender;?></td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $i;?>">
                    Update
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?php echo $i;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                                    <div class="form-grup">
                                <form action="" method="POST">
                                        <label for="name">Name:</label>
                                        <input type="text" value="<?php echo $name;?>" class="form-control" name="u_name" id="">
                                        <input type="hidden" value="<?php echo $id;?>" class="form-control" name="u_id" id="">
                                    </div>
                                    <div class="form-grup">
                                        <label for="name">Email:</label>
                                        <input type="text" value="<?php echo $user_email;?>" class="form-control" name="u_email" id="">
                                    </div>
                                    <div class="form-grup">
                                        <label for="name">Password:</label>
                                        <input type="text" value="<?php echo $user_password;?>" class="form-control" name="u_pass" id="">
                                    </div>
                                    <div class="form-grup">
                                        <label for="name">Gender:</label>
                                        <input type="text" value="<?php echo $gender;?>" class="form-control" name="u_gender" id="">
                                    </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="update_btn" class="btn btn-primary">Save changes</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                    </td>
                <td>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModel<?php echo $i;?>">
                Delete
                </button>

                <!-- Modal -->
                <div class="modal fade" id="deleteModel<?php echo $i;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="POST">
                    <div class="modal-body">
                        Are You Sure Want To Delete <?php echo $name; ?> User?  
                        <input type="hidden" value="<?php echo $id;?>" name="delete_id" id="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="delete_btn" class="btn btn-danger">Delete User</button>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
                </td>
                </tr>


        <?php
           $i++;
        }

           
        }
        else
        {
            echo "Error :".mysqli_error($connection);
        }
     }

        ?>



        <?php
            if(isset($_POST['update_btn']))
            {
                    $id = $_POST['u_id'];
                    $name = $_POST['u_name'];
                    $email = $_POST['u_email'];
                    $pass = $_POST['u_pass'];
                    $gender = $_POST['u_gender'];


                    $update_query = "UPDATE users SET user_name='$name' , user_email='$email' , user_password='$pass',gender='$gender' WHERE id='$id' ";
                    $result_update = mysqli_query($connection,$update_query);
                    if($result_update)
                    {
                        header("Location:table-basic.php");
                    }
                    else
                    {
                        echo "Error :".mysqli_error($connection);
                    }


            }
            if(isset($_POST['delete_btn']))
            {
                    $id = $_POST['delete_id'];
                 


                    $delete_query = "DELETE FROM users WHERE id='$id' ";
                    $result_delete = mysqli_query($connection,$delete_query);
                    if($result_delete)
                    {
                        header("Location:table-basic.php");
                    }
                    else
                    {
                        echo "Error :".mysqli_error($connection);
                    }


            }
           
            
        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <?php include'adfooter.php';?>