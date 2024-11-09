
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
    $target_file="images/blog/";
    move_uploaded_file($image, $target_file.basename($image_name));


    $q5="INSERT INTO `blog`(`category`, `image`, `heading`, `sub_heading1`, `sub_heading2`, `short_passage`) VALUES ('$category','$image_name','$heading','$sub_heading1','$sub_heading2','$short_passage')";
    $e5=mysqli_query($conn,$q5);
    if($q5)
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
  
$q1 = "select * from `category`";
$e1 = mysqli_query($conn, $q1);  

?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

<div>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Blog</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <!-- <li class="breadcrumb-item"><a href="all_category.php">Product Listing</a></li> -->
              <li class="breadcrumb-item active">Add Blog</li>
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
                <h3 class="card-title">Add Blog <a href="all_blog.php" class="btn btn-success pull-right"><i class="fa fa-chevron-circle-right fa-1x"></i> All Blog</a></h3>
                <p style="color: green;"><?php echo $msg; ?></p>
                <p style="color: red;"><?php echo $msg1; ?></p>
              </div>


      <div class="card-body">
      <div class="Data_modal_conts">


                  <form class="col-md-12" action="" method="post" enctype="multipart/form-data">


                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12" >
                                            <div class="form-group">
                                              <label for="">Choose a category</label>
                                              <select class="form-control" name="category" id="" placeholder="--Select a category--">
                                                <option selected disabled>--Select a category--</option>
                                                <?php
                                                while ($result1 = mysqli_fetch_row($e1)) 
                                                {
                                                  ?>
                                                  <option value="<?php echo $result1[1]; ?>">
                                                    <?php echo $result1[1]; ?>
                                                  </option>
                                                  <?php
                                                }
                                                ?>
                                              </select>
                                            </div>
                                        </div>
                                    </div>
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
                                        
                                                <textarea name="sub_heading1"> </textarea>
                                                <script>
                                                        CKEDITOR.replace( 'sub_heading1' );
                                                </script>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12" >
                                            <div class="form-group col-sm-12">
                                                <label> Choose Blog Image </label>
                                                <input type="file" class="form-control" placeholder=""  name="image" >
                                            </div>
                                        </div>
                                    </div>
                                    
                                     <div class="row">
                                        <div class="col-md-12" >
                                            <div class="form-group col-sm-12">
                                                <label> Short Passage </label>
                                                <input type="text" class="form-control" placeholder=""  name="short_passage"  >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label><b>Enter short  heading </b></label>&nbsp;
                                           <small>Upload Your Content Without Semicolon and apostrophe s</small>
                                              
                                              <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
                                        
                                                <textarea name="sub_heading2"> </textarea>
                                                <script>
                                                        CKEDITOR.replace( 'sub_heading2' );
                                                </script>
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
