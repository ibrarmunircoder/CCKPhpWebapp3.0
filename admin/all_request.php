<?php
//session_start();
include_once("../connection.php");
?>
<?php include('./links/header.php');?>
<?php include('./links/navbar.php');?>


<?php
$q1="select * from `request`";
$e1=mysqli_query($conn,$q1);
?>


 <!-- DataTables -->
 <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">



<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Request-a-quote</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Request-a-quote</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Request-a-quote </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead class="custom_header">
                  <tr>
                    <th>Id</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Company name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Apartment</th>
                    <th>City </th>
                    <th>State</th>
                    <th>Zipcode</th>
                    <th>Description</th>
                    <th>Estimated Project Start Date </th>
                    <th>New Construction or Existing Site</th>
                    <th>Property Type</th>
                    <th> Parking Format</th>
                    <th>Electric Utility Company</th>
                    <th>Ev Charging Stations</th>
                    <th> Bill Drivers For Electricity Usage</th>
                    <th>Control Access To The EV Charger(s)</th>
                    <th>About Us</th>
                    <th>Questions</th>
                    
                  </tr>
                  </thead>
                      <?php
                          if(mysqli_num_rows($e1)==0)
                          {
                            echo "<tr><td colspan='22' align='center'>NO Record Found</td></tr>";
                          }
                          else
                          {
                        ?>
                  <tbody>
                      <?php
                        $i=1;
                         while($result=mysqli_fetch_row($e1))
                         {   
                        ?>
                  <tr>
                    <td><?php echo"$i"; ?></td>
                    <td><?php echo "$result[1]"; ?></td>
                    <td><?php echo "$result[2]"; ?></td>
                    <td><?php echo "$result[3]"; ?></td>
                    <td><?php echo "$result[4]"; ?></td>
                    <td><?php echo "$result[5]"; ?></td>
                    <td><?php echo "$result[6]"; ?></td>
                    <td><?php echo "$result[7]"; ?></td>
                    <td><?php echo "$result[8]"; ?></td>
                    <td><?php echo "$result[9]"; ?></td>
                    <td><?php echo "$result[10]"; ?></td>
                    <td><?php echo "$result[11]"; ?></td>
                    <td><?php echo "$result[12]"; ?></td>
                    <td><?php echo "$result[13]"; ?></td>
                    <td><?php echo "$result[14]"; ?></td>
                    <td><?php echo "$result[15]"; ?></td>
                    <td><?php echo "$result[16]"; ?></td>
                    <td><?php echo "$result[17]"; ?></td>
                    <td><?php echo "$result[18]"; ?></td>
                    <td><?php echo "$result[19]"; ?></td>
                    <td><?php echo "$result[20]"; ?></td>
                    <td><?php echo "$result[21]"; ?></td>
                    
                   </tr>
                      <?php
                        $i++;
                         }
                        ?>
                 </tbody>
                  <?php
                      }
                    ?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- The Add Product Modal -->
    <!-- <div class="modal" id="AddModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Add Product</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
             <div class="Data_modal_conts">
                 <form>
                     <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" class="form-control" name="">
                     </div>
                     <div class="form-group">
                        <label>Product Quantity</label>
                        <input type="text" class="form-control" name="">
                     </div>
                     <div class="form-group">
                        <label>Product Price</label>
                        <input type="text" class="form-control" name="">
                     </div>
                     <button class="btn btn-success w-100">Submit</button>
                 </form>
             </div>
          </div>
        </div>
      </div>
    </div>
 -->
    <!-- The Edit Product Modal -->
  <!--   <div class="modal" id="EditModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Edit Product</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
             <div class="Data_modal_conts">
                 <form>
                     <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" class="form-control" name="">
                     </div>
                     <div class="form-group">
                        <label>Product Quantity</label>
                        <input type="text" class="form-control" name="">
                     </div>
                     <div class="form-group">
                        <label>Product Price</label>
                        <input type="text" class="form-control" name="">
                     </div>
                     <button class="btn btn-primary w-100">Submit</button>
                 </form>
             </div>
          </div>
        </div>
      </div>
    </div> -->


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