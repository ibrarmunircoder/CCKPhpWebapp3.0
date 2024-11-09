<?php
//session_start();
include_once("../connection.php");
?>
<?php include('./links/header.php');?>
<?php include('./links/navbar.php');?>

<?php
if(isset($_POST['updateid']))
{
    $id=$_GET['id']; 

    $heading = $_POST['heading'];
    
    $sql="update why_us set heading='".$heading."'  where id='".$_GET['id']."'";
    $result=mysqli_query($conn,$sql);


if(!empty($_FILES['image']['name'])){

    $file_name = $_FILES['image']['name'];

    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];

    $array = explode('.', $_FILES['image']['name']);
    $file_ext=strtolower(end($array));

    $expensions= array("jpeg","jpg","png","gif");

    if(in_array($file_ext,$expensions)=== false){
        $errors="extension not allowed, please choose a JPEG or PNG or JPG.";
    }

    if($file_size > 12097152){
        $errors='File size must be excately 11 MB';
    }
   $newfilename= str_replace(" ", "", basename($_FILES["image"]["name"]));

    if(empty($errors)==true) {

        move_uploaded_file($file_tmp, "../assets/images/" . $newfilename);

    }


      $sql="update the_proposal set image='".$newfilename."' where id='".$_GET['id']."'";
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
            <h1 class="m-0">Why_us</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <!-- <li class="breadcrumb-item"><a href="all_category.php">Product Listing</a></li> -->
              <li class="breadcrumb-item active">Why_us</li>
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
                $id=$_GET['id'];
                $sql= mysqli_query($conn,"select * from why_us where id='$id'  ");
                $total=mysqli_fetch_assoc($sql);
            ?>

                  <form class="col-md-12" action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">


                                <div class="col-md-12">
                                        <label><b>Enter short  heading </b></label>&nbsp;
                                       <small>Upload Your Content Without Semicolon and apostrophe s</small>
                                          
                                          <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
                                    
                                            <textarea name="heading"><?php echo $total['heading'];?> </textarea>
                                            <script>
                                                    CKEDITOR.replace( 'heading' );
                                            </script>
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

<script>
    CKEDITOR.replace( 'editor' );
</script>

<script>
    CKEDITOR.replace( 'editor1' );
</script>

<?php include('links/footer.php');?>
