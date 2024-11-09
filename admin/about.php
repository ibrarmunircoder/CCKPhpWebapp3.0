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
if(isset($_POST['updateid']))
{
    $id=$_GET['id']; 

    $heading = $_POST['heading'];
    $first_sub_content = $_POST['first_sub_content'];
    $second_sub_content = $_POST['second_sub_content'];
    $third_sub_content = $_POST['third_sub_content'];
    $description = $_POST['description'];


    $sql="update about set heading='".$heading."', first_sub_content='".$first_sub_content."', second_sub_content='".$second_sub_content."', third_sub_content='".$third_sub_content."', description='".$description."'  where id='".$_GET['id']."'";
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

        move_uploaded_file($file_tmp, "images/about/" . $newfilename);

    }


      $sql="update about set image='".$newfilename."' where id='".$_GET['id']."'";
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
            <h1 class="m-0">Edit about</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <!-- <li class="breadcrumb-item"><a href="all_category.php">Product Listing</a></li> -->
              <li class="breadcrumb-item active">Edit about</li>
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
                $sql= mysqli_query($conn,"select * from about where id='$id'  ");
                $total=mysqli_fetch_assoc($sql);
            ?>

                  <form class="col-md-12" action="" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">


                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6" >
                                            <div class="form-group col-sm-12">
                                                <label> Enter heading </label>
                                                <input type="Text" class="form-control" placeholder=""  name="heading" 
                                                 value="<?php echo $total['heading'];?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6" >
                                            <div class="form-group col-sm-12">
                                                <label> 1st sub content </label>
                                                <input type="Text" class="form-control" placeholder=""  name="first_sub_content" 
                                                 value="<?php echo $total['first_sub_content'];?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6" >
                                            <div class="form-group col-sm-12">
                                                <label> 2nd sub content </label>
                                                <input type="Text" class="form-control" placeholder=""  name="second_sub_content" 
                                                 value="<?php echo $total['second_sub_content'];?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6" >
                                            <div class="form-group col-sm-12">
                                                <label> 3rd sub content </label>
                                                <input type="Text" class="form-control" placeholder=""  name="third_sub_content" 
                                                 value="<?php echo $total['third_sub_content'];?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4" >
                                            <div class="form-group">
                                                <label> Choose image </label>
                                                <input type="file" class="form-control" placeholder="" name="image"  value="<?php echo $total['image'];?>"  >
                                            </div>
                                        </div>
                                        <div class="col-md-2" >
                                            <div class="form-group"><img src="images/about/<?php echo $total['image'];?>"height="110" width="150"></div>
                                        </div>
                                    </div>

                                 <div class="col-md-12">
                                        <label><b>1st sub heading </b></label>&nbsp;
                                           <small>Upload Your Content Without Semicolon and apostrophe s</small>
                                              
                                              <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
                                        
                                                <textarea name="description"><?php echo $total['description'];?></textarea>
                                                <script>
                                                        CKEDITOR.replace( 'description' );
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
