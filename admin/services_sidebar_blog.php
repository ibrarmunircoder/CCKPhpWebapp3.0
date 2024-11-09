<?php
//session_start();
include_once("../connection.php");
?>
<?php include('./links/header.php');?>
<?php include('./links/navbar.php');?>

<?php  
if(isset($_POST['btn1']))
{
    extract($_POST); 
     $image=$_FILES['image']['tmp_name'];
    $image_name=$_FILES["image"]["name"];
    //upload
    $target_file="images/logo/";
    move_uploaded_file($image, $target_file.basename($image_name));
    
    $q2="INSERT INTO `services_sidebar_blog`(`heading`, `sub_heading`, `image`, `description`) VALUES ('$heading','$sub_heading','$image_name','$description')";
    $e2=mysqli_query($conn,$q2);
    if($q2)
    {
        $msg="Added Success Done";
    }
    else
    {
        $msg="failed";
    }
} 
else 
{
  $msg="";
}    
  

?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

<div>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Services sidebar blog </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <!-- <li class="breadcrumb-item"><a href="all_category.php">Product Listing</a></li> -->
              <li class="breadcrumb-item active">Services sidebar blog</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

      <!-- Main content -->
           <section class="content">
           <div class="container-fluid">
           <div class="row">
           <div class="col-12">
           <div class="card">
            <div class="card-header">
            <h3 class="card-title"><a href="all_services_sidebar_blog.php" class="btn btn-success pull-right">All services sidebar blog<i class="fa fa-chevron-circle-right fa-1x"></i></a></h3>
                <p style="color: green;"><?php echo $msg; ?></p>
                <p style="color: red;"><?php echo $msg1; ?></p>
              </div>


      <div class="card-body">
      <div class="Data_modal_conts">


                  <form class="col-md-12" action="" method="post" enctype="multipart/form-data">


                                <div class="col-md-12">
                                    <div class="row">
                                             <div class="form-group col-6">
                                                <label> Enter Heading </label>
                                                <input type="Text" class="form-control" placeholder=""  name="heading" 
                                            </div>
                                        </div>
                                       <div class="form-group col-6">
                                                <label> Enter sub heading </label>
                                                <input type="Text" class="form-control" placeholder=""  name="sub_heading" 
                                            </div>
                                        </div>
                                       
                                       </div>
                                    <div class="row">
                                        <div class="col-md-12" >
                                            <div class="form-group col-sm-12">
                                                <label> Enter logo </label>
                                                <input type="file" class="form-control" placeholder=""  name="image" 
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-12">
                                        <label><b>Enter short  heading </b></label>&nbsp;
                                           <small>Upload Your Content Without Semicolon and apostrophe s</small>
                                              
                                              <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
                                        
                                                <textarea name="description"></textarea>
                                                <script>
                                                        CKEDITOR.replace( 'description' );
                                                </script>
                                             </div>
                                    </div>
                                </div>


           


              <button class="btn btn-success w-100" name="btn1">Submit</button>

</form>

               </div>
              </div>

            </div>
          </div>
        </div>
       </div>
      </section>
</div>

<script>
    CKEDITOR.replace( 'editor' );
</script>

<script>
    CKEDITOR.replace( 'editor1' );
</script>

<?php include('links/footer.php');?>
