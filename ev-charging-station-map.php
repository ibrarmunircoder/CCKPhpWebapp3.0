<?php include('links/header.php');?>
<?php include('links/navbar.php');?>

<?php
$q1="select * from `station_map`";
$e1=mysqli_query($conn,$q1);
$result1=mysqli_fetch_row($e1);
?>
<div class="site-breadcrumb" style="background: url(assets/img/bg/hero.jpg)">
	<div class="container">
		<h2 class="breadcrumb-title">EV Charging Station Map</h2>
		<ul class="breadcrumb-menu">
			<li><a href="index.php">Home</a></li>
			<li class="active">EV Charging Station Map</li>
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
                        <?php echo $result1[1]; ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-lg-12 col-md-12">
        		<div class="ev-charging-map-locations">
        			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d222415.0919079226!2d-95.06139530425905!3d29.42190360026727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x863f7912a0edb117%3A0x862d9cbcadeeb4e1!2sTexas%20City%2C%20TX%2C%20USA!5e0!3m2!1sen!2sin!4v1722927339618!5m2!1sen!2sin" width="100%" height="450" style="border:0;margin-bottom: -10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        		</div>
        	</div>
        </div>
    </div>
</div>


<?php include('links/footer.php');?>