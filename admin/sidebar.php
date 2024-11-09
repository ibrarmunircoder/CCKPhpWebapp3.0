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

    $q3="INSERT INTO `sidebar`(`heading`, `image`, `sub_heading`) VALUES ('$heading','$image_name','$sub_heading')";
    $e3=mysqli_query($conn,$q3);
    if($q3)
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
            <h1 class="m-0">Sidebar</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <!-- <li class="breadcrumb-item"><a href="all_category.php">Product Listing</a></li> -->
              <li class="breadcrumb-item active">Sidebar</li>
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
                <h3 class="card-title">Add Sidebar <a href="all_sidebar.php" class="btn btn-success pull-right"><i class="fa fa-chevron-circle-right fa-1x"></i> All Sidebar</a></h3>
                <p style="color: green;"><?php echo $msg; ?></p>
                <p style="color: red;"><?php echo $msg1; ?></p>
              </div>


      <div class="card-body">
      <div class="Data_modal_conts">


                  <form class="col-md-12" action="" method="post" enctype="multipart/form-data">


                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6" >
                                            <div class="form-group col-sm-12">
                                                <label> Enter Heading </label>
                                                <input type="Text" class="form-control" placeholder=""  name="heading"  >
                                            </div>
                                        </div>
                                        <div class="col-md-6" >
                                            <div class="form-group col-sm-12">
                                                <label> Enter Side heading </label>
                                                <input type="Text" class="form-control" placeholder=""  name="sub_heading"  >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6" >
                                            <div class="form-group col-sm-12">
                                                <label> Choose Logo </label>
                                                <input type="file" class="form-control" placeholder=""  name="image"  >
                                            </div>
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



<?php include('links/footer.php');?>