
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
    $image1=$_FILES['image1']['tmp_name'];
$image_name1=$_FILES["image1"]["name"];
    //upload
    $target_file="images/services/";
    move_uploaded_file($image1, $target_file.basename($image_name1));

$image2=$_FILES['image2']['tmp_name'];
$image_name2=$_FILES["image2"]["name"];
    //upload
    $target_file="images/services/";
    move_uploaded_file($image2, $target_file.basename($image_name2));


    $q1="INSERT INTO `feasibility_program`(`heading`, `description`, `image1`, `image2`, `image_heading`, `image_description`) VALUES ('$heading','$description','$image_name1','$image_name2','$image_heading','$desc')";
    $e1=mysqli_query($conn,$q1);
    if($q1)
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
            <h1 class="m-0">Add feasibility program</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <!-- <li class="breadcrumb-item"><a href="all_category.php">Product Listing</a></li> -->
              <li class="breadcrumb-item active">Add feasibility program</li>
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
                <h3 class="card-title">Add feasibility program<a href="all_feasibility_program.php" class="btn btn-success pull-right"><i class="fa fa-chevron-circle-right fa-1x"></i> All feasibility program</a></h3>
                <p style="color: green;"><?php echo $msg; ?></p>
                <p style="color: red;"><?php echo $msg1; ?></p>
              </div>


      <div class="card-body">
      <div class="Data_modal_conts">


                  <form class="col-md-12" action="" method="post" enctype="multipart/form-data">


                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12" >
                                            <div class="form-group col-sm-12">
                                                <label> Enter Heading </label>
                                                <input type="Text" class="form-control" placeholder=""  name="heading"  >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label><b>Enter short  heading </b></label>&nbsp;
                                           <small>Upload Your Content Without Semicolon and apostrophe s</small>
                                              
                                              <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
                                        
                                                <textarea name="description"> </textarea>
                                                <script>
                                                        CKEDITOR.replace( 'description' );
                                                </script>
                                             </div>
                                    <div class="row">
                                        <div class="col-md-12" >
                                            <div class="form-group col-sm-12">
                                                <label> Enter Image Heading </label>
                                                <input type="text" class="form-control" placeholder=""  name="image_heading"  >
                                            </div>
                                        </div>
                                        <div class="col-md-6" >
                                            <div class="form-group col-sm-12">
                                                <label> Choose Image </label>
                                                <input type="file" class="form-control" placeholder=""  name="image1"  >
                                            </div>
                                        </div>
                                        <div class="col-md-6" >
                                            <div class="form-group col-sm-12">
                                                <label> Choose Feasibility Image </label>
                                                <input type="file" class="form-control" placeholder=""  name="image2"  >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                        <label><b>Enter Image Description </b></label>&nbsp;
                                           <small>Upload Your Content Without Semicolon and apostrophe s</small>
                                              
                                              <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
                                        
                                                <textarea name="desc"> </textarea>
                                                <script>
                                                        CKEDITOR.replace( 'desc' );
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
