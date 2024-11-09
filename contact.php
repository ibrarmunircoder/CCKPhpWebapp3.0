<?php include('links/header.php');?>
<?php include('links/navbar.php');?>

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


<div class="site-breadcrumb" style="background: url(assets/img/bg/hero.jpg)">
	<div class="container">
		<h2 class="breadcrumb-title">Contact Us</h2>
		<ul class="breadcrumb-menu">
			<li><a href="index.php">Home</a></li>
			<li class="active">Contact Us</li>
		</ul>
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
                                    <p><a href="request-quote.php">Click here to Free Quote </a></p>
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
                                        <button class="theme-btn mt-10" name="btn1" type="submit">Send Message <i class="far fa-long-arrow-right"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php include('links/footer.php');?>