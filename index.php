<?php 

(include "include/header.php");

?> 


<!------ Navigation ---- >

<?php  include"include/navigation.php"       ?>
   

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            
            
            
            
            
            
            <div class="col-md-8">
                
                
                
               <?php    
                
                $sql = "select * from posts";
                $query_post = mysqli_query($conn,$sql);
                while($row=mysqli_fetch_assoc($query_post)){
                    
                    $post_title = $row['post_title'];
                    $post_author = $row['post_auther'];
                    $post_date  = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = $row['post_content'];
                    $post_tags    = $row['post_tags'];
                    
                    
                    
                
                
                ?>

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $post_title ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author  ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> </p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_image ?>" alt="">
                <hr>
                <p> <?php   echo $post_content ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                
                
                
                
                
                         <?php }?>

                

                <!-- Second Blog Post -->
              
                
                
                
                
                

            

                
            </div>

            <!-- Blog Sidebar Widgets Column -->
            
            
            
            
            
            
            
            
   
            
            
           <?php  include("include/sidebar.php");    ?>
            
            
            
            
            
            

        </div>
        <!-- /.row -->

      

       
<?php  
       include("include/footer.php");    
?>