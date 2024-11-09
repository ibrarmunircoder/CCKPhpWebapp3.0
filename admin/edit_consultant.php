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
    $p1 = $_POST['p1'];
    $p2 = $_POST['p2'];
    $p3 = $_POST['p3'];
    $p4 = $_POST['p4'];
    $p5 = $_POST['p5'];
    $p6 = $_POST['p6'];
    $p7 = $_POST['p7'];
    $p8 = $_POST['p8'];

    

    $sql="update consultant set heading='".$heading."',p1='".$p1."',p2='".$p2."',p3='".$p3."',p4='".$p4."',p5='".$p5."',p6='".$p6."',p7='".$p7."',p8='".$p8."' where id=$id";
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
    $image_name=time().$newfilename;    

    if(empty($errors)==true) {

        
        move_uploaded_file($file_tmp, "images/home" . $image_name);

    }


    $sql="update services set image='".$image_name."' where id=$id";
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
            <h1 class="m-0">Edit Consultant</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <!-- <li class="breadcrumb-item"><a href="all_category.php">Product Listing</a></li> -->
              <li class="breadcrumb-item active">Edit Consultant</li>
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
                <h3 class="card-title">Edit Consultant <a href="all_consultant.php" class="btn btn-success pull-right"><i class="fa fa-chevron-circle-right fa-1x"></i> All Consultant</a></h3>
                <p style="color: green;"><?php echo $msg; ?></p>
                <p style="color: red;"><?php echo $msg1; ?></p>
              </div>


      <div class="card-body">
      <div class="Data_modal_conts">
                 <?php
                  $sql= mysqli_query($conn,"select * from consultant where id='".$id."'");
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
                                        <div class="col-md-6" >
                                            <div class="form-group col-sm-12">
                                                <label> Enter Sub-heading </label>
                                                <input type="text" class="form-control" placeholder=""  name="p1" 
                                                value="<?php echo $total['p1'];?>">
                                                 
                                            </div>
                                        </div>
                                        <div class="col-md-6" >
                                            <div class="form-group col-sm-12">
                                                <label> Enter Sub-heading </label>
                                                <input type="text" class="form-control" placeholder=""  name="p2" 
                                                value="<?php echo $total['p2'];?>">
                                                 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6" >
                                            <div class="form-group col-sm-12">
                                                <label> Enter Sub-heading </label>
                                                <input type="text" class="form-control" placeholder=""  name="p3" 
                                                value="<?php echo $total['p3'];?>">
                                                 
                                            </div>
                                        </div>
                                        <div class="col-md-6" >
                                            <div class="form-group col-sm-12">
                                                <label> Enter Sub-heading </label>
                                                <input type="text" class="form-control" placeholder=""  name="p4" 
                                                value="<?php echo $total['p4'];?>">
                                                 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6" >
                                            <div class="form-group col-sm-12">
                                                <label> Enter Sub-heading </label>
                                                <input type="text" class="form-control" placeholder=""  name="p5" 
                                                value="<?php echo $total['p5'];?>">
                                                 
                                            </div>
                                        </div>
                                        <div class="col-md-6" >
                                            <div class="form-group col-sm-12">
                                                <label> Enter Sub-heading </label>
                                                <input type="text" class="form-control" placeholder=""  name="p6" 
                                                value="<?php echo $total['p6'];?>">
                                                 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6" >
                                            <div class="form-group col-sm-12">
                                                <label> Enter Sub-heading </label>
                                                <input type="text" class="form-control" placeholder=""  name="p7" 
                                                value="<?php echo $total['p7'];?>">
                                                 
                                            </div>
                                        </div>
                                        <div class="col-md-6" >
                                            <div class="form-group col-sm-12">
                                                <label> Enter Sub-heading </label>
                                                <input type="text" class="form-control" placeholder=""  name="p8" 
                                                value="<?php echo $total['p8'];?>">
                                                 
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
