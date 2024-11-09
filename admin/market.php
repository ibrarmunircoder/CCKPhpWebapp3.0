<?php
$today = date("F Y");

$date  =  date("Y-m-d");
$id=$_GET['id']; 
?>

<?php
//session_start();
include_once("../connection.php");
?>
<?php include('./links/header.php');?>
<?php include('./links/navbar.php');?>

<?php
$today = date("F Y");

$date  =  date("Y-m-d");
$id=$_GET['id']; 
?>

<?php
if(isset($_POST['updateid']))
{
    $id=$_GET['id']; 

    $description1 = $_POST['description1'];
    $description2 = $_POST['description2'];
   
    
    $sql="update market set description1='".$description1."',description2='".$description2."' where id=$id";
    $result=mysqli_query($conn,$sql);

 if(!empty($_FILES['image1']['name']))
    {

        $file_name = $_FILES['image1']['name'];
        $file_size =$_FILES['image1']['size'];
        $file_tmp =$_FILES['image1']['tmp_name'];
        $file_type=$_FILES['image1']['type'];
        $array = explode('.', $_FILES['image1']['name']);
        $file_ext=strtolower(end($array));
        $expensions= array("jpeg","jpg","png","gif");
        if(in_array($file_ext,$expensions)=== false){
            $errors="extension not allowed, please choose a JPEG or PNG or JPG.";
        }
        if($file_size > 12097152){
            $errors='File size must be excately 11 MB';
        }
        $newfilename= str_replace(" ", "", basename($_FILES["image1"]["name"]));
        $image_name=time().$newfilename;    
        if(empty($errors)==true) 
        {
            move_uploaded_file($file_tmp, "images/resources/" . $image_name);
        }
        $sql="update market set image1='".$image_name."' where id=$id";
        $result=mysqli_query($conn,$sql);
    }
    if(!empty($_FILES['image2']['name']))
    {
        $file_name = $_FILES['image2']['name'];
        $file_size =$_FILES['image2']['size'];
        $file_tmp =$_FILES['image2']['tmp_name'];
        $file_type=$_FILES['image2']['type'];
        $array = explode('.', $_FILES['image2']['name']);
        $file_ext=strtolower(end($array));
        $expensions= array("jpeg","jpg","png","gif");
        if(in_array($file_ext,$expensions)=== false)
        {
            $errors="extension not allowed, please choose a JPEG or PNG or JPG.";
        }
        if($file_size > 12097152)
        {
            $errors='File size must be excately 11 MB';
        }
        $newfilename2= str_replace(" ", "", basename($_FILES["image2"]["name"]));
        $image_name2=time().$newfilename2;    
        if(empty($errors)==true) 
        {
            move_uploaded_file($file_tmp, "images/resources/" . $image_name2);
        }
        $sql="update market set image2='".$image_name2."'";
        $result=mysqli_query($conn,$sql);
    }
    if(!empty($_FILES['image3']['name']))
    {
        $file_name = $_FILES['image3']['name'];
        $file_size =$_FILES['image3']['size'];
        $file_tmp =$_FILES['image3']['tmp_name'];
        $file_type=$_FILES['image3']['type'];
        $array = explode('.', $_FILES['image3']['name']);
        $file_ext=strtolower(end($array));
        $expensions= array("jpeg","jpg","png","gif");
        if(in_array($file_ext,$expensions)=== false){
            $errors="extension not allowed, please choose a JPEG or PNG or JPG.";
        }
        if($file_size > 12097152){
            $errors='File size must be excately 11 MB';
        }
        $newfilename3= str_replace(" ", "", basename($_FILES["image3"]["name"]));
        $image_name3=time().$newfilename3; 
        if(empty($errors)==true) {
            move_uploaded_file($file_tmp, "images/resources/" . $image_name3);
        }
        $sql="update market set image3='".$image_name3."'";
        $result=mysqli_query($conn,$sql);
    }
    

    if($sql)
    {
        $msg="Update Successfully...";
    }
    else{
        $msg1="Do not Update...Try Again.";
    }
}
?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

<div>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Infrastructure & Sales-market</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <!-- <li class="breadcrumb-item"><a href="all_category.php">Product Listing</a></li> -->
              <li class="breadcrumb-item active">Edit Infrastructure & Sales-market</li>
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
                <p style="color: green;"><?php echo $msg; ?></p>
                <p style="color: red;"><?php echo $msg1; ?></p>
              </div>


      <div class="card-body">
      <div class="Data_modal_conts">
                 <?php
                  $sql= mysqli_query($conn,"select * from market where id='".$id."'");
                  $total=mysqli_fetch_assoc($sql);
                  ?>

                  <form class="col-md-12" action="" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">


                                <div class="col-md-12">
                                     <div class="row">
                                        <div class="col-md-4" >
                                            <div class="form-group">
                                                <label> Choose Infrastructure Image </label>
                                                <input type="file" class="form-control" placeholder="" name="image1"  value="<?php echo $total['image1'];?>"  >
                                            </div>
                                        </div>
                                        <div class="col-md-2" >
                                            <div class="form-group"><img src="images/resources/<?php echo $total['image1'];?>"height="110" width="150"></div>
                                        </div>
                                    </div>

                                 <div class="col-md-12">
                                        <label><b>Enter Infrastructure heading </b></label>&nbsp;
                                           <small>Upload Your Content Without Semicolon and apostrophe s</small>
                                              
                                              <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
                                        
                                                <textarea name="description1"><?php echo $total['description1'];?></textarea>
                                                <script>
                                                        CKEDITOR.replace( 'description1' );
                                                </script>
                                             </div>
                                    </div>

                                     <div class="row">
                                        <div class="col-md-4" >
                                            <div class="form-group">
                                                <label> Choose Market Image </label>
                                                <input type="file" class="form-control" placeholder="" name="image2"  value="<?php echo $total['image2'];?>"  >
                                            </div>
                                        </div>
                                        <div class="col-md-2" >
                                            <div class="form-group"><img src="images/resources/<?php echo $total['image2'];?>"height="110" width="150"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4" >
                                            <div class="form-group">
                                                <label> Choose Market Image </label>
                                                <input type="file" class="form-control" placeholder="" name="image3"  value="<?php echo $total['image3'];?>"  >
                                            </div>
                                        </div>
                                        <div class="col-md-2" >
                                            <div class="form-group"><img src="images/resources/<?php echo $total['image3'];?>"height="110" width="150"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label><b>Enter Sales-market heading </b></label>&nbsp;
                                           <small>Upload Your Content Without Semicolon and apostrophe s</small>
                                              
                                              <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
                                        
                                                <textarea name="description2"><?php echo $total['description2'];?></textarea>
                                                <script>
                                                        CKEDITOR.replace( 'description2' );
                                                </script>
                                             </div>
                                    </div>
                                </div>
                                 <button type="submit" class="btn btn-success w-100" name="updateid">Submit</button>

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
