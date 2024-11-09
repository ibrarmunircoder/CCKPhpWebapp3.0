<?php include('links/header.php');?>
<?php include('links/navbar.php');?>

<?php
$q5="select * from `market`";
$e5=mysqli_query($conn,$q5);
$result5=mysqli_fetch_row($e5);
?>

<div class="site-breadcrumb" style="background: url(assets/img/bg/hero.jpg)">
	<div class="container">
		<h2 class="breadcrumb-title">EV Sales and Market Share</h2>
		<ul class="breadcrumb-menu">
			<li><a href="index.php">Home</a></li>
			<li class="active">EV Sales and Market Share</li>
		</ul>
	</div>
</div>

<div class="team-area pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="site-heading text-center">
                	<span class="site-title-tagline">Resources</span>
                   
                    <p>
                      <?php echo $result5[5]; ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-lg-6 col-md-6">
        		<div class="ev-sales-market-share-item">
        			<img src="admin/images/resources/<?php echo $result5[3]; ?>">
        		</div>
        	</div>
            <div class="col-lg-6 col-md-6">
                <div class="ev-sales-market-share-item">
                    <img src="admin/images/resources/<?php echo $result5[4]; ?>">
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('links/footer.php');?>