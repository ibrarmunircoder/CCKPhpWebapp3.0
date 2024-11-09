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

    $email = $_POST['email'];
    $short_heading = $_POST['short_heading'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $linkedin = $_POST['linkedin'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $logo_heading = $_POST['logo_heading'];
    
    
    $sql="update contact_details set email='".$email."',short_heading='".$short_heading."',facebook='".$facebook."',twitter='".$twitter."',linkedin='".$linkedin."',address='".$address."',phone='".$phone."',logo_heading='".$logo_heading."' where id=$id";
    $result=mysqli_query($conn,$sql);



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
            <h1 class="m-0">Edit contact details</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <!-- <li class="breadcrumb-item"><a href="all_category.php">Product Listing</a></li> -->
              <li class="breadcrumb-item active">Edit contact details</li>
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
                  $sql= mysqli_query($conn,"select * from contact_details where id='".$id."'");
                  $total=mysqli_fetch_assoc($sql);
                  ?>

                  <form class="col-md-12" action="" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">


                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12" >
                                            <div class="form-group col-sm-12">
                                                <label> Enter email </label>
                                                <input type="Text" class="form-control" placeholder=""  name="email" 
                                                 value="<?php echo $total['email'];?>">
                                            </div>
                                        </div>
                                    </div>

                                 <div class="col-md-12">
                                        <label><b>1st sub heading </b></label>&nbsp;
                                           <small>Upload Your Content Without Semicolon and apostrophe s</small>
                                              
                                              <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
                                        
                                                <textarea name="short_heading"><?php echo $total['short_heading'];?></textarea>
                                                <script>
                                                        CKEDITOR.replace( 'short_heading' );
                                                </script>
                                             </div>
                                    </div>

                                     <div class="row">
                                        <div class="col-md-6" >
                                            <div class="form-group col-sm-12">
                                                <label> Enter facebook link </label>
                                                <input type="text" class="form-control" placeholder=""  name="facebook" 
                                                value="<?php echo $total['facebook'];?>">
                                                 
                                            </div>
                                        </div>
                                        <div class="col-md-6" >
                                            <div class="form-group col-sm-12">
                                                <label> Enter twitter link </label>
                                                <input type="text" class="form-control" placeholder=""  name="twitter" 
                                                value="<?php echo $total['twitter'];?>">
                                                 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6" >
                                            <div class="form-group col-sm-12">
                                                <label> Enter linkedin link </label>
                                                <input type="text" class="form-control" placeholder=""  name="linkedin" 
                                                value="<?php echo $total['linkedin'];?>">
                                                 
                                            </div>
                                        </div>
                                        <div class="col-md-6" >
                                            <div class="form-group col-sm-12">
                                                <label> Enter address </label>
                                                <input type="text" class="form-control" placeholder=""  name="address" 
                                                value="<?php echo $total['address'];?>">
                                                 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6" >
                                            <div class="form-group col-sm-12">
                                                <label> Enter phone </label>
                                                <input type="text" class="form-control" placeholder=""  name="phone" 
                                                value="<?php echo $total['phone'];?>">
                                                 
                                            </div>
                                        </div>
                                        <div class="col-md-6" >
                                            <div class="form-group col-sm-12">
                                                <label> Logo heading </label>
                                                <input type="text" class="form-control" placeholder=""  name="logo_heading" 
                                                value="<?php echo $total['logo_heading'];?>">
                                                 
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
