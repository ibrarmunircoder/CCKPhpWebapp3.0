<?php include('links/header.php');?>
<?php include('links/navbar.php');?>

<?php 
$q1="select * from `services`";
$e1=mysqli_query($conn,$q1);

$q2="select * from `why_us`";
$e2=mysqli_query($conn,$q2);
$result2=mysqli_fetch_row($e2);

$q3="select * from `sidebar`";
$e3=mysqli_query($conn,$q3);

$q4="select * from `consultant`";
$e4=mysqli_query($conn,$q4);

$q5="select * from `clients`";
$e5=mysqli_query($conn,$q5);
$result5=mysqli_fetch_row($e5);

$q6="select * from `clients`";
$e6=mysqli_query($conn,$q6);

$q7="select * from `projects`";
$e7=mysqli_query($conn,$q7);

$q8="select * from `partners`";
$e8=mysqli_query($conn,$q8);
$result8=mysqli_fetch_row($e8);

$q9="select * from `partners`";
$e9=mysqli_query($conn,$q9);

?>
<?php
if(isset($_POST['btn1']))
{
  extract($_POST);
  
$q11="INSERT INTO `contact`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";
$e11=mysqli_query($conn,$q11);
    if($e11)
    {
        $msg="Added Success Done";
    }
    else
    {
        $msg="failed";
    }
  
}
else
{
  $msg="";
}

?>
<?php 
$data8 = mysqli_query($conn,"select * from banner_study where id=1");
$data = mysqli_fetch_assoc($data8);
?>
        <div class="hero-section hero-slider owl-carousel owl-theme">
            <div class="hero-single" style="background-image: url(assets/img/slider/1.jpg)">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-7 col-lg-7">
                            <div class="hero-content">
                               
                                <p class="wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".75s">
                                    <?= $data['banner_heading1']; ?>
                                </p>
                                <div class="hero-btn wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                                    <a href="request-a-quote.php" class="theme-btn">Request a Quote <i class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-single" style="background-image: url(assets/img/slider/2.jpg)">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-7 col-lg-7">
                            <div class="hero-content">
                                <h1 class="hero-title wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".50s">
                                    EV Charging Feasibility Study
                                </h1>
                                <p class="wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".75s">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod <br>
                                    tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <div class="hero-btn wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                                    <a href="request-a-quote.php" class="theme-btn">Request a Quote  <i class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tour-area pt-80 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <div class="site-header text-center mb-40">
                            <span class="site-title-tagline">Services</span>
                            <h2 class="site-title">What are Our Services?</h2>
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
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="tour-item">
                            <div class="tour-img">
                                 <img src="admin/images/home/<?php echo $result1[2]; ?>" alt="">
                            </div>
                            <div class="tour-info">
                                <a href="service-details.php">
                                    <h5><?php echo $result1[1]; ?></h5>
                                </a>
                                <p>
                                   <?php echo $result1[3]; ?>
                                </p>
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


        <div class="pt-80 pb-80">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-5">
                        <div class="site-header pe-lg-5">
                            <span class="site-title-tagline">Why Us</span>
                            <p>
                               <?php echo $result2[1];?>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="why-us-section">
                            <?php 
                            if(mysqli_num_rows($e3)>0)
                            {
                              while($result3=mysqli_fetch_row($e3))
                              {
                            ?>
                            <div class="item">
                                <div class="imgs">
                                    <img src="admin/images/logo/<?php echo $result3[2]; ?>">
                                </div>
                                <div class="conts">
                                    <h3><?php echo $result3[1]; ?></h3>
                                    <p>
                                       <?php echo $result3[3]; ?>
                                    </p>
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
                            if(mysqli_num_rows($e4)>0)
                            {
                              while($result4=mysqli_fetch_row($e4))
                              {
                            ?>
        <div class="pt-80 pb-80 bg">
             <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <div class="site-header text-center mb-40">
                            <span class="site-title-tagline">What We Does</span>
                            <h2 class="site-title mb-10"><?php echo $result4[1]; ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 mb-20">
                        <div class="what-we-does-boxx">
                            <h3><?php echo $result4[2]; ?></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mb-20">
                        <div class="what-we-does-boxx">
                            <h3><?php echo $result4[3]; ?></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mb-20">
                        <div class="what-we-does-boxx">
                            <h3><?php echo $result4[4]; ?></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mb-20">
                        <div class="what-we-does-boxx">
                            <h3><?php echo $result4[5]; ?></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mb-20">
                        <div class="what-we-does-boxx">
                            <h3><?php echo $result4[6]; ?></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mb-20">
                        <div class="what-we-does-boxx">
                            <h3><?php echo $result4[7]; ?></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mb-20">
                        <div class="what-we-does-boxx">
                            <h3><?php echo $result4[8]; ?></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mb-20">
                        <div class="what-we-does-boxx">
                            <h3><?php echo $result4[9]; ?></h3>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
                    <?php 
                    }
                    }
                    ?>
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
$data1 = mysqli_query($conn,"select * from consultant where id=2");
$data = mysqli_fetch_assoc($data1);
?>
        
        <div class="destination-area pt-80 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-8 mx-auto">
                        <div class="site-header text-center mb-40">
                            <span class="site-title-tagline">Type of businesses</span>
                            <h2 class="site-title mb-10"><?= $data['heading']; ?></h2>
                        </div>
                    </div>
                </div>
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
<?php 
$data2 = mysqli_query($conn,"select * from partners where id=1");
$data = mysqli_fetch_assoc($data2);
?>
         <div class="pt-80 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-8 mx-auto">
                        <div class="site-header text-center mb-40">
                            <span class="site-title-tagline">Our Partners</span>
                            <h2 class="site-title mb-10"><?= $data['heading']; ?></h2>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="partner-wrapper partner-slider owl-carousel owl-theme">
                            <?php 
                                    if(mysqli_num_rows($e9)>0)
                                    {
                                      while($result9=mysqli_fetch_row($e9))
                                      {
                                    ?>
                            <div class="partner-item">
                                <img src="admin/images/partners/<?php echo $result9[2]; ?>" alt="thumb">
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
$data5 = mysqli_query($conn,"select * from contact_details where id=1");
$data = mysqli_fetch_assoc($data5);
?>

        <div class="contact-area pt-80 pb-80" id="get-quote">
            <div class="container">
                <div class="contact-custom-row">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="contact-custom-information">
                                 <div class="site-header">
                                    <span class="site-title-tagline">Get in Touch</span>
                                    <h2 class="site-title">Contact us</h2>
                                </div>
                                <div class="item">
                                    <h5>Contact Us</h5>
                                    <p>Email: <a href="#"><?= $data['email']; ?></a></p>
                                </div>
                                <div class="item">
                                    <h5>Follow Us</h5>
                                    <div class="links">    
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                                <div class="item">
                                    <h5>Request a Free Quote</h5>
                                    <p><a href="request-a-quote.php">Click here to Free Quote </a></p>
                                    <!-- <a href="#" class="theme-btn mt-10">Free Quote <i class="far fa-long-arrow-right"></i></a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 ms-auto">
                            <div class="contact-custom-form">
                                <div class="site-header">
                                    <span class="site-title-tagline">Get in Touch</span>
                                    <h2 class="site-title">Contact with us</h2>
                                </div>
                                <form class="row" action="" method="post">
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control" name="name" placeholder="Full name *" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control" name="email" placeholder="Email address *" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea class="form-control" rows="3" name="message" placeholder="Message Details"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="theme-btn mt-10" type="submit" name="btn1">Send Message <i class="far fa-long-arrow-right"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php include('links/footer.php');?>