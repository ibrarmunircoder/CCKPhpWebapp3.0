<?php
//session_start();
include_once("../connection.php");
?>
<?php include('./links/header.php');?>
<?php include('./links/navbar.php');?>

<?php

if(isset($_POST['submit']))

{

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

        move_uploaded_file($file_tmp, "images/testimonial/" . $newfilename);

    }



    $heading=$_POST['heading'];
    $name=$_POST['name'];
    $title=$_POST['title'];
   

 if(!empty($_FILES['image']['tmp_name'])){

            $sql="update testimonial set image='".$newfilename."' where id='".$_GET['id']."'";
            $result=mysqli_query($conn, $sql);

    }

    $sql="update testimonial set heading='".$heading."',name='".$name."',title='".$title."' where id='".$_GET['id']."'";
    

     $result=mysqli_query($conn, $sql);



    if($result){
        $msg="Details Updated Successfully...";
    }
    else{
        $msg1="Details Do not Updated...Try Again.";
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
            <h1 class="m-0">Edit Testimonial</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <!-- <li class="breadcrumb-item"><a href="all_category.php">Product Listing</a></li> -->
              <li class="breadcrumb-item active">Edit Clients</li>
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
                <h3 class="card-title">Edit Testimonial <a href="all_testimonial.php" class="btn btn-success pull-right"><i class="fa fa-chevron-circle-right fa-1x"></i> All Testimonial</a></h3>
                <p style="color: green;"><?php echo $msg; ?></p>
                <p style="color: red;"><?php echo $msg1; ?></p>
              </div>


      <div class="card-body">
      <div class="Data_modal_conts">
                 <?php
                            $id=$_GET['id'];
                            $sql= mysqli_query($conn,"select * from testimonial where id='$id'  ");
                            $total=mysqli_fetch_assoc($sql);
                    ?>

                  <form class="col-md-12" action="" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="id">


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
                                        <div class="col-md-4" >
                                            <div class="form-group">
                                                <label> Choose Image </label>
                                                <input type="file" class="form-control" placeholder="" name="image"  value="<?php echo $total['image'];?>"  >
                                            </div>
                                        </div>
                                        <div class="col-md-2" >
                                            <div class="form-group"><img src="images/testimonial/<?php echo $total['image'];?>"height="110" width="150"></div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12" >
                                            <div class="form-group col-sm-12">
                                                <label> Name </label>
                                                <input type="Text" class="form-control" placeholder=""  name="name" 
                                                 value="<?php echo $total['name'];?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12" >
                                            <div class="form-group col-sm-12">
                                                <label> Title </label>
                                                <input type="Text" class="form-control" placeholder=""  name="title" 
                                                 value="<?php echo $total['title'];?>">
                                            </div>
                                        </div>
                                    </div>

                                    
                                    
                                </div>
                         <button class="btn btn-success w-100" name="submit">Submit</button>

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