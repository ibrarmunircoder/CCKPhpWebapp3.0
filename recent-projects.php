<?php include('links/header.php');?>
<?php include('links/navbar.php');?>
<?php
$q5="select * from `clients`";
$e5=mysqli_query($conn,$q5);
$result5=mysqli_fetch_row($e5);

$q6="select * from `clients`";
$e6=mysqli_query($conn,$q6);

$q7="select * from `projects`";
$e7=mysqli_query($conn,$q7);
?>

<div class="site-breadcrumb" style="background: url(assets/img/bg/hero.jpg)">
	<div class="container">
		<h2 class="breadcrumb-title">Recent Projects</h2>
		<ul class="breadcrumb-menu">
			<li><a href="index.php">Home</a></li>
			<li class="active">Recent Projects</li>
		</ul>
	</div>
</div>


		<div class="destination-area bg pt-80 pb-80">
            <div class="container">
                <div class="row">
                    <?php 
                        if(mysqli_num_rows($e7)>0)
                        {
                          while($result7=mysqli_fetch_row($e7))
                          {
                        
                        ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="destination-item">
                            <div class="destination-img">
                                     <img src="admin/images/about/<?php echo $result7[1]; ?>">
                            </div>
                            <div class="destination-info">
                                <ul>
                                    <?php echo $result7[2]; ?>
                                </ul>
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


<div class="counter-area pt-50 pb-60" style="background-image: url('assets/img/bg/01.png');">
    <div class="container">
    	<div class="row">
    		<div class="col-lg-7 col-md-8 mx-auto">
    			<div class="site-header text-center mb-40">
                    <h2 class="site-title">Our Stats</h2>
                </div>
    		</div>
    	</div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="counter-box">                  
                    <span class="counter" data-count="+" data-to="1000" data-speed="3000">1000</span>
                    <h6 class="title">+ Happy Clients</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="counter-box">
                    <span class="counter" data-count="+" data-to="600" data-speed="3000">600</span>
                    <h6 class="title">+ Completed Projects</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="counter-box">
                    <span class="counter" data-count="+" data-to="750" data-speed="3000">750</span>
                    <h6 class="title">+ Charging Ports</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="counter-box">
                    <span class="counter" data-count="+" data-to="50" data-speed="3000">50</span>
                    <h6 class="title">+ Win Awards</h6>
                </div>
            </div>
        </div>
    </div>
</div>

		<div class="pt-80 pb-30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-5">
                        <div class="site-header pe-lg-5">
                            <span class="site-title-tagline">Our clients</span>
                            <h2 class="site-title mb-10"><?php echo $result5[1]; ?></h2>
                            <p>
                                <?php echo $result5[2]; ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="row">
                            <?php 
                                    if(mysqli_num_rows($e6)>0)
                                    {
                                      while($result6=mysqli_fetch_row($e6))
                                      {
                                    ?>
                            <div class="col-lg-3 col-md-4">
                                <div class="clients-logo-items">
                                    <img src="admin/images/client/<?php echo $result6[3]; ?>">
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

<div class="cta-area" style="background-image: url('assets/img/bg/02.jpg');">
    <div class="container">
        <div class="cta-content">
            <h2>Get Started With a Free Quote Today!</h2>
            <a href="request-a-quote.php">Request a Quote <i class="far fa-long-arrow-right"></i></a>
        </div>
    </div>
</div>


<?php include('links/footer.php');?>