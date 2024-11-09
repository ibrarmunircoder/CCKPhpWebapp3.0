<?php include('links/header.php');?>
<?php include('links/navbar.php');?>
<?php
$q5="select * from `market`";
$e5=mysqli_query($conn,$q5);
$result5=mysqli_fetch_row($e5);
?>

<div class="site-breadcrumb" style="background: url(assets/img/bg/hero.jpg)">
	<div class="container">
		<h2 class="breadcrumb-title">EV Charging Infrastructure</h2>
		<ul class="breadcrumb-menu">
			<li><a href="index.php">Home</a></li>
			<li class="active">EV Charging Infrastructure</li>
		</ul>
	</div>
</div>


<div class="about-area pt-80 pb-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-left me-lg-4">
                    <div class="about-img map">
                        <img src="admin/images/resources/<?php echo $result5[1]; ?>" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-right">
                    <div class="site-header">
                        <span class="site-title-tagline">Resources</span>
                        
                    <p class="about-text">
                    <?php echo $result5[2]; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('links/footer.php');?>