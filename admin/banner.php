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
    $banner_heading1 = $_POST['banner_heading1'];
    $banner_heading2 = $_POST['banner_heading2'];
    $logo_heading = $_POST['logo_heading'];
    
        $sql="update banner_study set banner_heading1='".$banner_heading1."',banner_heading2='".$banner_heading2."',logo_heading='".$logo_heading."' where id=$id";
    $result=mysqli_query($conn,$sql);


if(!empty($_FILES['image4']['name'])){



    $file_name = $_FILES['image4']['name'];

    $file_size =$_FILES['image4']['size'];
    $file_tmp =$_FILES['image4']['tmp_name'];
    $file_type=$_FILES['image4']['type'];

    $array = explode('.', $_FILES['image4']['name']);
    $file_ext=strtolower(end($array));

    $expensions= array("jpeg","jpg","png","gif");

    if(in_array($file_ext,$expensions)=== false){
        $errors="extension not allowed, please choose a JPEG or PNG or JPG.";
    }

    if($file_size > 12097152){
        $errors='File size must be excately 11 MB';
    }
    $newfilename= str_replace(" ", "", basename($_FILES["image4"]["name"]));
    $image_name=time().$newfilename;    

    if(empty($errors)==true) {

        
        move_uploaded_file($file_tmp, "images/slider/" . $image_name);

    }


    $sql="update banner_study set image4='".$image_name."' where id=$id";
    $result=mysqli_query($conn,$sql);


    
}

if(!empty($_FILES['image5']['name']))
    {
        $file_name = $_FILES['image5']['name'];
        $file_size =$_FILES['image5']['size'];
        $file_tmp =$_FILES['image5']['tmp_name'];
        $file_type=$_FILES['image5']['type'];
        $array = explode('.', $_FILES['image5']['name']);
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
        $newfilename5= str_replace(" ", "", basename($_FILES["image5"]["name"]));
        $image_name5=time().$newfilename5;    
        if(empty($errors)==true) 
        {
            move_uploaded_file($file_tmp, "images/slider/" . $image_name5);
        }
        $sql="update banner_study set image5='".$image_name5."'";
        $result=mysqli_query($conn,$sql);
    }
    

    if($sql){
        $msg="Products Update Successfully...";
    }
    else{
        $msg1="Products  Do not Update...Try Again.";
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
            <h1 class="m-0">Add Banner  </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <!-- <li class="breadcrumb-item"><a href="all_category.php">Product Listing</a></li> -->
              <li class="breadcrumb-item active">Add Banner  </li>
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
                  $sql= mysqli_query($conn,"select * from banner_study where id='".$id."'");
                  $total=mysqli_fetch_assoc($sql);
                  ?>
     
                  <form class="col-md-12" action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>>


                                <div class="col-md-12">
                                    
                                    <div class="row">
                                        <div class="col-md-4" >
                                            <div class="form-group">
                                                <label> Choose image </label>
                                                <input type="file" class="form-control" placeholder="" name="image4"  value="<?php echo $total['image4'];?>"  >
                                            </div>
                                        </div>
                                        <div class="col-md-2" >
                                            <div class="form-group"><img src="images/slider/<?php echo $total['image4'];?>"height="110" width="150"></div>
                                        </div>
                                    </div>
                                        <div class="col-md-12" >
                                            <div class="form-group col-sm-12">
                                                <label> Enter logo heading </label>
                                                <input type="text" class="form-control" placeholder=""  name="logo_heading" 
                                                value="<?php echo $total['logo_heading'];?>">
                                                 
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-12">
                                        <label><b>1st banner heading</b></label>&nbsp;
                                       <small>Upload Your Content Without Semicolon and apostrophe s</small>
                                          
                                          <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
                                    
                                            <textarea name="banner_heading1"><?php echo $total['banner_heading1'];?> </textarea>
                                            <script>
                                                    CKEDITOR.replace( 'banner_heading1' );
                                            </script>
                                </div>
                                    <div class="row">
                                        <div class="col-md-4" >
                                            <div class="form-group">
                                                <label> Choose image </label>
                                                <input type="file" class="form-control" placeholder="" name="image5"  value="<?php echo $total['image5'];?>"  >
                                            </div>
                                        </div>
                                        <div class="col-md-2" >
                                            <div class="form-group"><img src="images/slider/<?php echo $total['image5'];?>"height="110" width="150"></div>
                                        </div>
                                    </div>
                                     <div class="col-md-12">
                                        <label><b>2nd banner heading </b></label>&nbsp;
                                       <small>Upload Your Content Without Semicolon and apostrophe s</small>
                                          
                                          <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
                                    
                                            <textarea name="banner_heading2"><?php echo $total['banner_heading2'];?> </textarea>
                                            <script>
                                                    CKEDITOR.replace( 'banner_heading2' );
                                            </script>
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
