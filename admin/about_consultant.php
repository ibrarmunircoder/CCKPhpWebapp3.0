
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
    $target_file="images/home/";
    move_uploaded_file($image, $target_file.basename($image_name));


    $q3="INSERT INTO `about_consultant`(`heading`, `sub_heading`, `content`) VALUES ('$heading','$sub_heading','$content')";
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
            <h1 class="m-0">Add about consultant</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <!-- <li class="breadcrumb-item"><a href="all_category.php">Product Listing</a></li> -->
              <li class="breadcrumb-item active">Add about consultant</li>
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
    <h3 class="card-title">Add about consultant <a href="all_about_consultant.php" class="btn btn-success pull-right"><i class="fa fa-chevron-circle-right fa-1x"></i> All about consultant</a></h3>
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
                                            <div class="form-group col-sm-6">
                                                <label>Enter sub heading </label>
                                                <input type="text" class="form-control" placeholder=""  name="sub_heading"  >
                                        </div>
                                    </div>
                                    
                                     <div class="row">
                                        <div class="col-md-12" >
                                            <div class="form-group col-sm-12">
                                                <label> Enter content </label>
                                                <input type="text" class="form-control" placeholder=""  name="content"  >
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
