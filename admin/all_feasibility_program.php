<?php
//session_start();
include_once("../connection.php");
?>
<?php include('./links/header.php');?>
<?php include('./links/navbar.php');?>

<?php
if(isset($_GET['deleteid']))
{
  $id=$_GET['deleteid']; 
    $sql="DELETE FROM feasibility_program WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
     header('location:all_feasibility_program.php');
    }
    else{
      die(mysqli_error($conn));
    }
}
?>


 <!-- DataTables -->
 <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">



<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

<div>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">All feasibility program </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <!-- <li class="breadcrumb-item"><a href="all_category.php">Product Listing</a></li> -->
              <li class="breadcrumb-item active">All feasibility program </li>
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
                <h3 class="card-title">All feasibility program <a href="feasibility_program.php"  class="btn btn-success pull-right"><i class="fa fa-plus-circle"></i> Add</a></h3>
                <p style="color: green;"><?php echo $msg; ?></p>
                <p style="color: red;"><?php echo $msg1; ?></p>
              </div>


      <div class="card-body">
    <table id="example1" class="table table-bordered table-hover">
                  <thead class="custom_header">

                                        <th> ID </th>
                                        <th> heading </th>
                                        <th> description </th>
                                        <th> feasibility image </th>
                                        <th> image </th>
                                        <th> image heading </th>
                                        <th> image description </th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql= mysqli_query($conn,"select * from feasibility_program");
    
                                        while($total=mysqli_fetch_assoc($sql))
                                        {
    
                                            ?>
                                        <tr>
                                            
                                            <td><?php echo $total['id'];?></td>
                                            <td><?php echo $total['heading'];?></td>             
                                            <td><?php echo $total['description'];?></td>             
                                            <td><img src="images/services/<?php echo $total['image2'];?>" height="100" width="175"></td>
                                            <td><img src="images/services/<?php echo $total['image1'];?>" height="100" width="175"></td>
                                            <td><?php echo $total['image_heading'];?></td>    
                                            <td><?php echo $total['image_description'];?></td>    

                                            <td>
                                            <a href="edit_feasibility_program.php?id=<?php echo $total['id'];?>" class="btn btn-warning del-btn"><i class="fa fa-solid fa-pen fa-1x">&nbsp;Edit</i></a>

                                            <a href="all_feasibility_program.php?deleteid=<?php echo $total['id'];?>" class="btn btn-danger del-btn mt-2"><i class="fa fa-trash fa-1x">&nbsp;Remove</i></a>

                                            </td>

                                        </tr>

                               
                                         <?php } ?>
                                    </tbody>
                                    </table>
              </div>

            </div>
          </div>
        </div>
       </div>
      </section>
</div>




<?php include('links/footer.php');?>

<!-- DataTables  & Plugins -->
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="assets/plugins/jszip/jszip.min.js"></script>
<script src="assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
