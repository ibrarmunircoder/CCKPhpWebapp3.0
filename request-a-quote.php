<?php include('links/header.php');?>
<?php include('links/navbar.php');?>

<?php
if(isset($_POST['btn1']))
{
  extract($_POST);
  
$q11="INSERT INTO `request`(`first_name`, `last_name`, `company_name`, `email`, `phone`, `address`, `apartment`, `city`, `state`, `zipcode`, `description`, `project_date`, `new_existing`, `property`, `parking`, `electric`, `ev_charging`, `bill_drivers`, `ev_chargers`, `about_us`, `questions`) VALUES ('$first_name','$last_name','$company_name','$email','$phone','$address','$apartment','$city','$state','$zipcode','$description','$Project_Date','$existing','$Property','$Parking','$electric','$ev_charging','$bill','$ev_chargers','$about','$questions')";
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
		<h2 class="breadcrumb-title">Request a Quote</h2>
		<ul class="breadcrumb-menu">
			<li><a href="index.php">Home</a></li>
			<li class="active">Request a Quote</li>
		</ul>
	</div>
</div>


<div class="contact-area pt-80 pb-80" id="get-quote">
    <div class="container">
        <div class="contact-custom-row">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <div class="contact-custom-form">
                        <div class="site-header">
                            <span class="site-title-tagline">Get Quote</span>
                            <h2 class="site-title">Request a Quote</h2>
                        </div>
                        <form class="row" action="" method="post">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="first_name" placeholder="First name *" >
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="last_name" placeholder="Last name *" >
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="company_name" placeholder="Company name *" >
                                <span>If you live in a condominium or apartment complex, please fill in the property name.</span>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" placeholder="Email address *" >
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="phone" placeholder="Phone number *" >
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="address" placeholder="Street address *" >
                                <span>Installation address.</span>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="apartment" placeholder="Apartment, suite, etc">
                            </div>
                             <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="city" placeholder="City *" >
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="state" placeholder="State / Province *" >
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="zipcode" placeholder="Zipcode *" >
                            </div>
                            <div class="form-group col-md-12">
                                <textarea class="form-control" rows="3" name="description" placeholder="Please Briefly Describe Your Project "></textarea>
                            </div>                            
                            <div class="form-group col-md-12">
                            	<p>What is Your Estimated Project Start Date <span>*</span></p>
                            	<label>
                            		<input type="radio" value="Now" name="Project_Date"> Now
                            	</label>
                            	<label>
                            		<input type="radio" value="3-6 months" name="Project_Date"> 3-6 months
                            	</label>
                            	<label>
                            		<input type="radio" value="6-12 months" name="Project_Date"> 6-12 months
                            	</label>
                            	<label>
                            		<input type="radio" value="later" name="Project_Date"> later
                            	</label>
                            </div>
                            <div class="form-group col-md-12">
                            	<p>New Construction or Existing Site <span>*</span></p>
                            	<label>
                            		<input type="radio" value="New construction (new building/development)" name="existing"> New construction (new building/development)
                            	</label>
                            	<label>
                            		<input type="radio" value="Existing building" name="existing"> Existing building
                            	</label>
                            </div>
                            <div class="form-group col-md-12">
                            	<p>What is the Property Type? <span>*</span></p>
                            	<label>
                            		<input type="radio" value="Condominium"name="Property"> Condominium
                            	</label>
                            	<label>
                            		<input type="radio" value="Apartment complex" name="Property"> Apartment complex
                            	</label>
                            	<label>
                            		<input type="radio" value=" Office/Workplace" name="Property"> Office/Workplace
                            	</label>
                            	<label>
                            		<input type="radio" value="Commercial/Retail" name="Property"> Commercial/Retail
                            	</label>
                            	<label>
                            		<input type="radio" value="Government" name="Property"> Government
                            	</label>
                            	<label>
                            		<input type="radio" value="Vacation rental/Airbnb" name="Property"> Vacation rental/Airbnb
                            	</label>
                            	<label>
                            		<input type="radio" value="Public parking lot/garage" name="Property"> Public parking lot/garage
                            	</label>
                            </div>
                            <div class="form-group col-md-12">
                            	<p>What is the Parking Format? <span>*</span></p>
                            	<label>
                            		<input type="radio" value="Unassigned"  name="Parking"> Unassigned
                            	</label>
                            	<label>
                            		<input type="radio" value="Assigned"  name="Parking"> Assigned
                            	</label>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="electric" placeholder="Who is the Electric Utility Company? *" >
                            </div>
                            <div class="form-group col-md-12">
                                <input type="number" class="form-control" name="ev_charging" placeholder="How Many EV Charging Stations Do You Need? *" >
                            </div>
                            <div class="form-group col-md-12">
                            	<p>Do You Want To Bill Drivers For Electricity Usage? <span>*</span></p>
                            	<label>
                            		<input type="radio" value="Yes" name="bill"> Yes
                            	</label>
                            	<label>
                            		<input type="radio" value="No" name="bill"> No
                            	</label>
                            	<label>
                            		<input type="radio" value="Not sure yet" name="bill"> Not sure yet
                            	</label>
                            </div>
                            <div class="form-group col-md-12">
                            	<p>Do You Want To Control Access To The EV Charger(s)? <span>*</span></p>
                            	<label>
                            		<input type="radio" value="Yes" name="ev_chargers"> Yes
                            	</label>
                            	<label>
                            		<input type="radio" value="No" name="ev_chargers"> No
                            	</label>
                            	<label>
                            		<input type="radio" value=" Not sure yet" name="ev_chargers"> Not sure yet
                            	</label>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea class="form-control" rows="3" name="about" placeholder="How Did You Hear About Us? "></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="questions" placeholder="Any Questions? *" >
                            </div>
                            

                            <div class="col-md-12">
                                <button class="theme-btn mt-10" type="submit" name="btn1">Send Quote Request <i class="far fa-long-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('links/footer.php');?>