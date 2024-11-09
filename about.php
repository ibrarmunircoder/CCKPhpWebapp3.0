<?php include('links/header.php');?>
<?php include('links/navbar.php');?>

<?php 
$q1="select * from `about`";
$e1=mysqli_query($conn,$q1);
$result1=mysqli_fetch_row($e1);

$q2="select * from `testimonial`";
$e2=mysqli_query($conn,$q2);

$q5="select * from `clients`";
$e5=mysqli_query($conn,$q5);
$result5=mysqli_fetch_row($e5);

$q6="select * from `clients`";
$e6=mysqli_query($conn,$q6);

$q3="select * from `about_consultant`";
$e3=mysqli_query($conn,$q3);

$q4="select * from `faq`";
$e4=mysqli_query($conn,$q4);

?>

<div class="site-breadcrumb" style="background: url(assets/img/bg/hero.jpg)">
	<div class="container">
		<h2 class="breadcrumb-title">About Us</h2>
		<ul class="breadcrumb-menu">
			<li><a href="index.php">Home</a></li>
			<li class="active">About Us</li>
		</ul>
	</div>
</div>



<div class="about-area pt-80 pb-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-left">
                    <div class="about-img">
                        <img src="admin/images/about/<?php echo $result1[5]; ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-right">
                    <div class="site-header">
                        <span class="site-title-tagline">About Us</span>
                        <h2 class="site-title"><?php echo $result1[1]; ?></h2>
                    </div>
                    <p class="about-text">
                    	<?php echo $result1[6]; ?>
                    </p>
                    <div class="about-list-wrapper">
                        <ul class="about-list list-unstyled">
                            <li>
                                <div class="icon"><span class="far fa-check-circle"></span></div>
                                <div class="text">
                                    <p><?php echo $result1[2]; ?></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><span class="far fa-check-circle"></span></div>
                                <div class="text">
                                    <p><?php echo $result1[3]; ?></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><span class="far fa-check-circle"></span></div>
                                <div class="text">
                                    <p><?php echo $result1[4]; ?></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a href="request-a-quote.php" class="theme-btn">Request a Quote <i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
$data1 = mysqli_query($conn,"select * from testimonial where id=1");
$data = mysqli_fetch_assoc($data1);
?>
<div class="team-area py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <h2 class="site-title">Meet Our Team</h2>
                    <p>
                       <?= $data['heading']; ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
                 <?php 
                    if(mysqli_num_rows($e2)>0)
                    {
                      while($result2=mysqli_fetch_row($e2))
                      {
                    
                    ?>
            <div class="col-md-6 col-lg-3">
                <div class="team-item active">
                    <img src="admin/images/testimonial/<?php echo $result2[2]; ?>" alt="thumb">
                    <div class="team-content">
                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                        <div class="team-bio">
                            <a href="#"><?php echo $result2[3]; ?></a>
                            <p><?php echo $result2[4]; ?></p>
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


		<div class="destination-area bg pt-80 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-8 mx-auto">
                        <div class="site-header text-center mb-40">
                            <span class="site-title-tagline">Projects</span>
                            <h2 class="site-title mb-10">Our Recent Projects</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="destination-item">
                            <div class="destination-img">
                                <img src="assets/img/gallery/1.jpg" alt="">
                            </div>
                            <div class="destination-info">
                                <h3>Napa Design Partners <br>- Napa, CA</h3>
                                <ul>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="destination-item">
                            <div class="destination-img">
                                <img src="assets/img/gallery/2.jpg" alt="">
                            </div>
                            <div class="destination-info">
                                <h3>Napa Design Partners <br>- Napa, CA</h3>
                                <ul>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="destination-item">
                            <div class="destination-img">
                                <img src="assets/img/gallery/3.jpg" alt="">
                            </div>
                            <div class="destination-info">
                                <h3>Napa Design Partners <br>- Napa, CA</h3>
                                <ul>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="destination-item">
                            <div class="destination-img">
                                <img src="assets/img/gallery/4.jpg" alt="">
                            </div>
                            <div class="destination-info">
                                <h3>Napa Design Partners <br>- Napa, CA</h3>
                                <ul>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="destination-item">
                            <div class="destination-img">
                                <img src="assets/img/gallery/5.jpg" alt="">
                            </div>
                            <div class="destination-info">
                                <h3>Napa Design Partners <br>- Napa, CA</h3>
                                <ul>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="destination-item">
                            <div class="destination-img">
                                <img src="assets/img/gallery/6.jpg" alt="">
                            </div>
                            <div class="destination-info">
                                <h3>Napa Design Partners <br>- Napa, CA</h3>
                                <ul>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                    <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
<?php 
$data2 = mysqli_query($conn,"select * from about_consultant where id=1");
$data = mysqli_fetch_assoc($data2);
?>

<div class="about-area bg pt-80 pb-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-left">
                    <div class="site-header">
                        <span class="site-title-tagline">EV Consultant</span>
                        <h2 class="site-title"><?= $data['heading']; ?></h2>
                    </div>
                    <p class="about-text">
                    	<?= $data['sub_heading']; ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-right">
                    <div class="about-list-wrapper">
                        <ul class="about-list list-unstyled">
                             <?php 
                                    if(mysqli_num_rows($e3)>0)
                                    {
                                      while($result3=mysqli_fetch_row($e3))
                                      {
                                    ?>
                            <li>
                                <div class="icon"><span class="far fa-check-circle"></span></div>
                                <div class="text">
                                    <p><?php echo $result3[3]; ?></p>
                                </div>
                            </li>
                            <?php
                                      }
                                    }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$data3 = mysqli_query($conn,"select * from faq where id=1");
$data = mysqli_fetch_assoc($data3);
?>

<div class="faq-area pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="faq-img">
                    <img src="admin/images/about/<?= $data['image']; ?>" alt="">
                </div>
            </div>
            <div class="col-lg-6 ">
            	<div class="site-heading mb-20">
                    <span class="site-title-tagline ">FAQ's</span>
                    <h2 class="site-title"><?= $data['heading']; ?></h2>
                </div>
                <div class="accordion" id="accordionExample">
                     <?php 
                                    if(mysqli_num_rows($e4)>0)
                                    {
                                      while($result4=mysqli_fetch_row($e4))
                                      {
                                    ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								 <?php echo $result4[2]; ?>
							</button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                               <?php echo $result4[3]; ?>
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

<div class="cta-area" style="background-image: url('assets/img/bg/02.jpg');">
    <div class="container">
        <div class="cta-content">
            <h2>Get Started With a Free Quote Today!</h2>
            <a href="request-a-quote.php">Request a Quote <i class="far fa-long-arrow-right"></i></a>
        </div>
    </div>
</div>


<?php include('links/footer.php');?>