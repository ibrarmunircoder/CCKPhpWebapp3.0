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
    
    $sub_heading = $_POST['sub_heading'];
    $content = $_POST['content'];

    $sql="update about_consultant set heading='".$heading."',sub_heading='".$sub_heading."',content='".$content."' where id=$id";
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
            <h1 class="m-0">Edit about consultant</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <!-- <li class="breadcrumb-item"><a href="all_category.php">Product Listing</a></li> -->
              <li class="breadcrumb-item active">Edit about consultant</li>
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
                <h3 class="card-title">Edit about consultant <a href="all_about_consultant.php" class="btn btn-success pull-right"><i class="fa fa-chevron-circle-right fa-1x"></i> All about consultant</a></h3>
                <p style="color: green;"><?php echo $msg; ?></p>
                <p style="color: red;"><?php echo $msg1; ?></p>
              </div>


      <div class="card-body">
      <div class="Data_modal_conts">
                 <?php
                  $sql= mysqli_query($conn,"select * from about_consultant where id='".$id."'");
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
                                    <div class="row">
                                        <div class="col-md-12" >
                                            <div class="form-group col-sm-12">
                                                <label> sub heading </label>
                                                <input type="Text" class="form-control" placeholder=""  name="sub_heading" 
                                                 value="<?php echo $total['sub_heading'];?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12" >
                                            <div class="form-group col-sm-12">
                                                <label> content </label>
                                                <input type="Text" class="form-control" placeholder=""  name="content" 
                                                 value="<?php echo $total['content'];?>">
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
