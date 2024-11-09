<?php include('links/header.php');?>
<?php include('links/navbar.php');?>
<?php 
$q1="select * from `blog`";
$e1=mysqli_query($conn,$q1);
?>

<div class="site-breadcrumb" style="background: url(assets/img/bg/hero.jpg)">
	<div class="container">
		<h2 class="breadcrumb-title">Blogs</h2>
		<ul class="breadcrumb-menu">
			<li><a href="index.php">Home</a></li>
			<li class="active">Blogs</li>
		</ul>
	</div>
</div>


<div class="blog-area pt-80 pb-80 bg">
    <div class="container">
        <div class="row">
                        <?php 
                        if(mysqli_num_rows($e1)>0)
                        {
                          while($result1=mysqli_fetch_row($e1))
                          {
                        
                        ?>
            <div class="col-md-6 col-lg-4">
                <div class="blog-item">
                    <div class="blog-item-thumb">
                        <img src="admin/images/blog/<?php echo $result1[2]; ?>" alt="Thumb">
                    </div>
                    <div class="blog-item-info">
                        <div class="blog-item-meta">
                            <ul>
                                <li><i class="far fa-user"></i> By Admin</li>
                                <li><i class="far fa-calendar-alt"></i> 09 May, 2024</li>
                            </ul>
                        </div>
                        <h5><a href="blog-details.php?id1=<?php echo $result1[0]; ?>" class="blog-item-title"><?php echo $result1[3]; ?></a></h5>
                        <a class="blog-item-more" href="blog-details.php?id1=<?php echo $result1[0]; ?>">Read more <i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <?php 
                          }
                        }
            ?>
        </div>

        <div class="pagination-area">
            <div aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
							<span aria-hidden="true"><i class="fal fa-arrow-left"></i></span>
						</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
							<span aria-hidden="true"><i class="fal fa-arrow-right"></i></span>
						</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>



<?php include('links/footer.php');?>