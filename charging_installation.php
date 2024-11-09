<?php include('links/header.php');?>
<?php include('links/navbar.php');?>

<?php 
$q1="select * from `feasibility_installation`";
$e1=mysqli_query($conn,$q1);

$q2="select * from `banner_installation`";
$e2=mysqli_query($conn,$q2);
$result2=mysqli_fetch_row($e2);

$q3="select * from `services_sidebar_installation`";
$e3=mysqli_query($conn,$q3);
?>

<div class="site-breadcrumb" style="background: url(assets/img/bg/hero.jpg)">
	<div class="container">
		<h2 class="breadcrumb-title">DC First Charging Installation</h2>
		<ul class="breadcrumb-menu">
			<li><a href="index.php">Home</a></li>
			<li class="active">DC First Charging Installation</li>
		</ul>
	</div>
</div>
<?php 
$data1 = mysqli_query($conn,"select * from feasibility_installation where id=1");
$data = mysqli_fetch_assoc($data1);
?>  
<div class="about-area pt-80 pb-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-left">
                    <div class="about-img">
                        <img src="admin/images/services/<?= $data['image2']; ?>" alt="">
                    </div>
                </div>
            </div>
          <div class="col-lg-6">
                <div class="about-right">
                    <div class="site-header">
                        <span class="site-title-tagline">feasibility installation</span>
                        <h2 class="site-title"><?= $data['heading']; ?></h2>
                    </div>
                    <p class="about-text">
                    <?= $data['description']; ?>
                    </p>
                   
                    <a href="request-a-quote.php" class="theme-btn">Request a Quote <i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
$data5 = mysqli_query($conn,"select * from services_sidebar_installation where id=1");
$data = mysqli_fetch_assoc($data5);
?>
<div class="pt-30 pb-80">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4">
				<div class="site-header mb-10">
					<span class="site-title-tagline">An EV Installation</span>
					<h2 class="site-title mb-20"><?= $data['heading']; ?></h2>
					<p>
	                   	<?= $data['sub_heading']; ?>
	                </p>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="row">
    				     <?php 
                        if(mysqli_num_rows($e3)>0)
                        {
                          while($result3=mysqli_fetch_row($e3))
                          {
                        
                        ?>
					<div class="col-lg-6 col-md-6">
						<div class="why-us-section">
							<div class="item">
	                            <div class="imgs">
	                                <img src="admin/images/logo/<?php echo $result3[3]; ?>">
	                            </div>
	                            <div class="conts">
	                                <p>
	                                   <?php echo $result3[4]; ?>
	                                </p>
	                            </div>
	                        </div>
	                    </div>
					</div>
					<?php
                          }
                        }
					?>
				</div>
            </div>
		</div>
	</div>
</div>


<div class="bg pt-80 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 mx-auto">
                <div class="site-header text-center mb-40">
                    <span class="site-title-tagline">DC First Charging Installation</span>
                    <h2 class="site-title">Why Conduct an DC First Charging Installation?</h2>
                </div>
            </div>
    	</div>
        <div class="row">
             <?php 
                    if(mysqli_num_rows($e1)>0)
                    {
                      while($result1=mysqli_fetch_row($e1))
                      {
                    
                    ?>
        	<div class="col-lg-4 col-md-6">
        		<div class="charging-feasibility-study-item">
        			<img src="admin/images/services/<?php echo $result1[3] ?>">
        			<div class="conts">
        				<?php echo $result1[6]; ?>
        			</div>
        		</div>
        	</div>
        	<?php
                      }
                    }
        	?>
        </div>               
    </div>
</div>
<?php 
$data2 = mysqli_query($conn,"select * from consultant where id=2");
$data = mysqli_fetch_assoc($data2);
?>

		<div class="pt-80 pb-80 bg-img" style="background-image: url('assets/img/bg/01.png');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 mx-auto">
                        <div class="site-header text-center mb-40">
                            <span class="site-title-tagline">Type of businesses</span>
                            <h2 class="site-title mb-10"><?= $data['heading']; ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 mb-20">
                        <div class="what-we-does-boxx">
                            <h3><?= $data['p1']; ?></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mb-20">
                        <div class="what-we-does-boxx">
                            <h3><?= $data['p2']; ?></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mb-20">
                        <div class="what-we-does-boxx">
                            <h3><?= $data['p3']; ?></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mb-20">
                        <div class="what-we-does-boxx">
                            <h3><?= $data['p4']; ?></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mb-20">
                        <div class="what-we-does-boxx">
                            <h3><?= $data['p5']; ?></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mb-20">
                        <div class="what-we-does-boxx">
                            <h3><?= $data['p6']; ?></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mb-20">
                        <div class="what-we-does-boxx">
                            <h3><?= $data['p7']; ?></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mb-20">
                        <div class="what-we-does-boxx">
                            <h3><?= $data['p8']; ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<div class="pt-80 pb-80">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="owl-carousel project-slider owl-theme">
					<div class="item">
						<div class="project-slider-items">
							<img src="admin/images/services/<?php echo $result2[1]; ?>">
						</div>
					</div>
					<div class="item">
						<div class="project-slider-items">
							<img src="admin/images/services/<?php echo $result2[2]; ?>">
						</div>
					</div>
					<div class="item">
						<div class="project-slider-items">
							<img src="admin/images/services/<?php echo $result2[3]; ?>">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="cta-area" style="background-image: url('assets/img/bg/02.jpg');">
    <div class="container">
        <div class="cta-content">
            <h2>Request a Free Quote to get started</h2>
            <a href="request-a-quote.php">Request a Quote <i class="far fa-long-arrow-right"></i></a>
        </div>
    </div>
</div>


<?php include('links/footer.php');?>