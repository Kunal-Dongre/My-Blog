<?php include 'header.php'; ?>
<?php ob_start();?>
<?php 
session_start();
?>
<div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header" >
                    <h3>Sign In</h3>
                    <div class="d-flex justify-content-end social_icon">
                        <span><i class="fab fa-facebook-square"></i></span>
                        <span><i class="fab fa-google-plus-square"></i></span>
                        <span><i class="fab fa-twitter-square"></i></span>
                    </div>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input required name="u_name" type="text" class="form-control" placeholder="username">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input required name="u_password" type="password" class="form-control" placeholder="password">
                        </div>
                        
                        <div class="form-group ">
                        <button name="login_btn" type="submit" class="btn float-center login_btn">
                        Login
                        </button> 
                        </div>
                    </form>

                        <?php
                            if(isset($_POST['login_btn']))
                            {
                                $name = $_POST['u_name'];
                                $pass = $_POST['u_password'];

                                $login_query = "SELECT * FROM users WHERE user_name='$name' and user_password='$pass'";

                                $result = mysqli_query($connection,$login_query);

                                if($result)
                                {
                                    $num_rows = mysqli_num_rows($result);
                                    if($num_rows == 1)
                                    {
                                        while($row = mysqli_fetch_array($result))
                                        {
                                        $id = $row['id'];                    
                                        $user_email = $row['user_email'];                    
                                        $user_name = $row['user_name'];  
                                
                                        $_SESSION["id"] = $id;             // global variable ,browser cookies 
                                        $_SESSION["user_email"] = $user_email;
                                        $_SESSION["user_name"] = $user_name;
                                        }
                                         header("Location:index.php");

                                    }
                                    else
                                    {

                                    echo "<script>
                                    alert('User name and password invalid');
                                    </script>";
                                    }

                                }
                                else
                                {
                                echo "Error".mysqli_error($connection);
                                }


                            }
                        ?>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Don't have an account?<a href="./register.php">Sign Up</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>