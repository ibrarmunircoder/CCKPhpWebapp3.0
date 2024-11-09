<?php include('links/header.php');?>
<?php include('links/navbar.php');?>

<?php 
if (isset($_REQUEST['id1'])) 
{
  $id1 = $_REQUEST['id1'];
  $q1 = "select * from `blog` where `id`='$id1'";
  $e1 = mysqli_query($conn, $q1);
} 
else 
{
  header("location:index.php");
}
?>
<?php
$q2="select * from `category`";
$e2=mysqli_query($conn,$q2);
?>
<div class="site-breadcrumb" style="background: url(assets/img/bg/hero.jpg)">
	<div class="container">
		<h2 class="breadcrumb-title">Consectetur adipisicing elit...</h2>
		<ul class="breadcrumb-menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="blog.php">Blogs</a></li>
			<li class="active">Consectetur adipisicing elit...</li>
		</ul>
	</div>
</div>


<div class="blog-single-area pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-single-wrapper">
                    <?php
                      while ($result1 = mysqli_fetch_row($e1)) 
                      {
                        ?>
                    <div class="blog-single-content">
                        <div class="blog-thumb-img">
                            <img src="admin/images/blog/<?php echo $result1[2]; ?>" alt="thumb" class="w-100">
                        </div>
                        <div class="blog-info">
                            <div class="blog-meta">
                                <div class="blog-meta-left">
                                    <ul>
                                        <li><i class="far fa-user"></i><a href="#">By Admin</a></li>
                                        <li><i class="far fa-calendar-alt"></i> 09 May, 2024</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-details">
                                <h3 class="blog-details-title mb-20"><?php echo $result1[3]; ?></h3>
                                <p class="mb-10">
                                    <?php echo $result1[4]; ?>
                                </p>
                                <blockquote class="blockqoute">
                                    <?php echo $result1[6]; ?>
                                    <h6 class="blockqoute-author">By Admin</h6>
                                </blockquote>
                                <p class="mb-20">
                                 <?php echo $result1[5]; ?>
                                </p>
                                <hr>
                                <div class="blog-details-tags pb-20">
                                    <h5>Tags : </h5>
                                    <ul>
                                        <li><a href="feasibility_study.php">EV Charging Feasibility Study</a></li>
                                        <li><a href="ev-sales-and-market-share.php">EV Sales and Market Share</a></li>
                                        <li><a href="ev-sales-and-market-share.php">EV Laws</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                      }
                    ?>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="sidebar">

                    <div class="widget search">
                        <h5 class="widget-title">Search</h5>
                        <form class="search-form">
                            <input type="text" class="form-control" placeholder="Search Here...">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                    </div>

                    <div class="widget category">
                        <h5 class="widget-title">Category</h5>
                              <?php 
                            if(mysqli_num_rows($e2)>0)
                            {
                              while($result2=mysqli_fetch_row($e2))
                              {
                            
                            ?>
                        <div class="category-list">
                            <a ><i class="far fa-angle-double-right"></i><?php echo $result2[1]; ?><span>  </span></a>
                            
                        </div>
                        <?php
                              }
                            }
                        ?>
                    
                    </div>

                    <div class="widget recent-post">
                        <h5 class="widget-title">Recent Post</h5>
                        <div class="recent-post-single">
                            <div class="recent-post-img">
                                <img src="assets/img/blog/1.jpg" alt="thumb">
                            </div>
                            <div class="recent-post-bio">
                                <h6><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing</a></h6>
                                <span><i class="far fa-clock"></i>09 May, 2024</span>
                            </div>
                        </div>
                        <div class="recent-post-single">
                            <div class="recent-post-img">
                                <img src="assets/img/blog/2.jpg" alt="thumb">
                            </div>
                            <div class="recent-post-bio">
                                <h6><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing</a></h6>
                                <span><i class="far fa-clock"></i>09 May, 2024</span>
                            </div>
                        </div>
                        <div class="recent-post-single">
                            <div class="recent-post-img">
                                <img src="assets/img/blog/3.jpg" alt="thumb">
                            </div>
                            <div class="recent-post-bio">
                                <h6><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing</a></h6>
                                <span><i class="far fa-clock"></i>09 May, 2024</span>
                            </div>
                        </div>
                    </div>

                    <div class="widget social-share">
                        <h5 class="widget-title">Follow Us</h5>
                        <div class="social-share-link">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>

<?php include('links/footer.php');?>