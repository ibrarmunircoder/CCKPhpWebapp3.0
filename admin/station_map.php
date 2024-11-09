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

    $description = $_POST['description'];
    
    $sql="update station_map set description='".$description."'  where id='".$_GET['id']."'";
    $result=mysqli_query($conn,$sql);






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
            <h1 class="m-0">Station map</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <!-- <li class="breadcrumb-item"><a href="all_category.php">Product Listing</a></li> -->
              <li class="breadcrumb-item active">Station map</li>
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
                $sql= mysqli_query($conn,"select * from station_map where id='$id'  ");
                $total=mysqli_fetch_assoc($sql);
            ?>

                  <form class="col-md-12" action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">


                                <div class="col-md-12">
                                        <label><b>Enter short  heading </b></label>&nbsp;
                                       <small>Upload Your Content Without Semicolon and apostrophe s</small>
                                          
                                          <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
                                    
                                            <textarea name="description"><?php echo $total['description'];?> </textarea>
                                            <script>
                                                    CKEDITOR.replace( 'description' );
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
