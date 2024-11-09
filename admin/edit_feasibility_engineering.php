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

    $heading = $_POST['heading'];
    $description = $_POST['description'];
    $image_heading = $_POST['image_heading'];
    $image_description = $_POST['image_description'];


    $sql="update feasibility_engineering set heading='".$heading."',description='".$description."',image_heading='".$image_heading."',image_description='".$image_description."' where id=$id";
    $result=mysqli_query($conn,$sql);




if(!empty($_FILES['image1']['name'])){



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

    if(empty($errors)==true) {

        
        move_uploaded_file($file_tmp, "images/services/" . $image_name);

    }


    $sql="update feasibility_engineering set image1='".$image_name."' where id=$id";
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
            move_uploaded_file($file_tmp, "images/services/" . $image_name2);
        }
        $sql="update feasibility_engineering set image2='".$image_name2."'";
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
            <h1 class="m-0">Edit feasibility engineering </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <!-- <li class="breadcrumb-item"><a href="all_category.php">Product Listing</a></li> -->
              <li class="breadcrumb-item active">Edit feasibility engineering </li>
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
                <h3 class="card-title">Edit feasibility engineering <a href="all_feasibility_engineering.php" class="btn btn-success pull-right"><i class="fa fa-chevron-circle-right fa-1x"></i> All feasibility engineering </a></h3>
                <p style="color: green;"><?php echo $msg; ?></p>
                <p style="color: red;"><?php echo $msg1; ?></p>
              </div>


      <div class="card-body">
      <div class="Data_modal_conts">
                 <?php
                  $sql= mysqli_query($conn,"select * from feasibility_engineering where id='".$id."'");
                  $total=mysqli_fetch_assoc($sql);
                  ?>

                  <form class="col-md-12" action="" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">


                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12" >
                                            <div class="form-group col-sm-12">
                                                <label> Enter Heading </label>
                                                <input type="Text" class="form-control" placeholder=""  name="heading" 
                                                 value="<?php echo $total['heading'];?>">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-12">
                                        <label><b>Enter short  heading </b></label>&nbsp;
                                           <small>Upload Your Content Without Semicolon and apostrophe s</small>
                                              
                                              <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
                                        
                                                <textarea name="description"><?php echo $total['description'];?></textarea>
                                                <script>
                                                        CKEDITOR.replace( 'description' );
                                                </script>
                                             </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12" >
                                            <div class="form-group col-sm-12">
                                                <label> Enter Image Heading </label>
                                                <input type="Text" class="form-control" placeholder=""  name="image_heading" 
                                                 value="<?php echo $total['image_heading'];?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4" >
                                            <div class="form-group">
                                                <label> Choose Image </label>
                                                <input type="file" class="form-control" placeholder="" name="image1"  value="<?php echo $total['image1'];?>"  >
                                            </div>
                                        </div>
                                        <div class="col-md-2" >
                                            <div class="form-group"><img src="images/services/<?php echo $total['image1'];?>"height="110" width="150"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4" >
                                            <div class="form-group">
                                                <label> Choose feasibility Image </label>
                                                <input type="file" class="form-control" placeholder="" name="image2"  value="<?php echo $total['image2'];?>"  >
                                            </div>
                                        </div>
                                        <div class="col-md-2" >
                                            <div class="form-group"><img src="images/services/<?php echo $total['image2'];?>"height="110" width="150"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label><b>Enter short  heading </b></label>&nbsp;
                                           <small>Upload Your Content Without Semicolon and apostrophe s</small>
                                              
                                              <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
                                        
                                                <textarea name="image_description"><?php echo $total['image_description'];?></textarea>
                                                <script>
                                                        CKEDITOR.replace( 'image_description' );
                                                </script>
                                             </div>
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
