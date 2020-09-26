<?php include 'header.php'; ?>
<?php include "db.php"; ?>
<?php ob_start();?>
<link rel="stylesheet" href="./css/home.css">

<div class="container cf6 text-center">
<h1 class="title">Hey there! <br> Welcome to Bloggy</h1>
<p class="logs">New User? Register:<i class="far fa-hand-point-right hand"></i></p><a href="./register.php"><button class="btn btn-solid bt1" href:"./register.php"> Register</button></a>
<br>
<p class="logs">Already a User? Login:<i class="far fa-hand-point-right hand"></i></p><a href="./login.php"><button class="btn btn-solid bt1"> Login</button></a>
    <?php 
        if($connection)
        {


            $read_query = "SELECT * FROM blog ORDER BY id DESC";
            
            $result = mysqli_query($connection,$read_query);

            if($result)
            {
                    $i=1;
                    while($row = mysqli_fetch_array($result))
                    {
                        $category = $row['Category'];
                        $title = $row['title'];
                        $user_name = $row['user_name'];
                        $blogdate = $row['bdate'];
                        $image = $row['images'];
                        $desc = $row['blog_desc'];
                        // print_r($result);
                    ?>

    
                    <h5 class="category"><?php echo $category; ?> </h5>
                    <br>
                    <h1 class="titlehome"><?php echo $title; ?></h1>
                    <p class="credits"><i class="far fa-user"></i> By <?php echo $user_name; ?> &nbsp; <i class="fas fa-table"></i> <?php echo $blogdate; ?></p>
                    <br><br>
                    <img height="500px" width="660px" src="./images/<?php echo $image; ?>" alt="image not loaded">
                    <p class="blogdesc"><?php echo $desc; ?></p>
                    <?php
                    }
            }
            else{
                echo "Error :".mysqli_error($connection);
            }
        }
    ?>
<?php include 'footer.php';?>

</div>
