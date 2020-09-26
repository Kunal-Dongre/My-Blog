<?php include 'header.php'; ?>

<div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Sign Up</h3>
                    <div class="d-flex justify-content-end social_icon">
                        <span><i class="fab fa-facebook-square"></i></span>
                        <span><i class="fab fa-google-plus-square"></i></span>
                        <span><i class="fab fa-twitter-square"></i></span>
                    </div>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input required type="text" class="form-control" name="u_name" placeholder="Name">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                            </div>
                            <input required type="text" class="form-control" name="u_email" placeholder="Email Id">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input required type="password" class="form-control" name="u_password" placeholder="password">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
                            </div>
                            <input type="radio" value="Male" name="u_gender"> Male <br>
                            <input type="radio" value="Female" name="u_gender">Female <br>
                        </div> 
                        
                        <div class="form-group ">
                        <button name="register_btn" type="submit" class="btn float-center login_btn">
                        Register
                        </button> 
                        </div>
                    </form>
                </div> <br>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Have a account Sign in!<a href="./login.php">Sign In</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>


    <?php

        if(isset($_POST['register_btn']))
        {
        
            $name = $_POST['u_name'];
            $email = $_POST['u_email'];
            $pass = $_POST['u_password'];
            $gender = $_POST['u_gender'];
           

            $connection = mysqli_connect('localhost','root','','my_project');

            if($connection)
            {
            $create_query = "INSERT INTO users(user_name,user_email,user_password,gender) VALUES('$name','$email','$pass','$gender')";

            $result = mysqli_query($connection,$create_query);


            if($result)
            {
                echo "data inserted successfully";
            }
            else
            {
                echo "Error :    ".mysqli_error($connection);
            }

            }
            else
            {
                echo "error in connection";
            }

           

        }




    ?>




<?php include 'footer.php'; ?>