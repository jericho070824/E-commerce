<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>

	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
	        		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		                <ol class="carousel-indicators">
		                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
		                </ol>
		                <div class="carousel-inner">
		                  <div class="item active">
		                    <img src="images/phones.jpg" alt="First slide">
		                  </div>
		                  <div class="item">
		                    <img src="images/laptops.jpg" alt="Second slide">
		                  </div>
		                  <div class="item">
		                    <img src="images/tablets.jpg" alt="Third slide">
		                  </div>
		                </div>
		                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		                  <span class="fa fa-angle-left"></span>
		                </a>
		                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		                  <span class="fa fa-angle-right"></span>
		                </a>
		            </div>
		            <h2>Aboutus</h2>
								<h3> Welcome to our Minor Project-2</h3>
								<h3> Performed by Akshay , Vishwas and Yash</h3>
								<p> Hello, we are Akshay, yash and Vishwas. We have been working on this project for 2-3 months now. Right now we have implemented our objectives but we plan on further expanding this project and add many more functionalities and features and make this webpage more dynamic to facilitate everyone.</p>

								<h2> AKSHAY</h2>
								<div class="column">
      <img src="https://scontent.fagr1-1.fna.fbcdn.net/v/t31.0-8/p960x960/17546833_1329943443759895_1482552953132477953_o.jpg?_nc_cat=102&_nc_sid=daf655&_nc_ohc=u597rfsGNloAX-vOWPt&_nc_ht=scontent.fagr1-1.fna&_nc_tp=6&oh=f23f990bffeda180654c5a0354cfa055&oe=5EDD2E83" style="width:50%">
    </div>

                  <p>Name - Akshay</p>
									<p>CSE-OSS</p>
									<p>6th semester</p>
									<p>Sap id-500054018</p>
								  <p>Enrollment number-R100216007</p>

                <h2> VISHWAS</h2>
								<div class="column">
								<img src="https://scontent.fagr1-1.fna.fbcdn.net/v/t1.0-9/p720x720/86173919_2601801436719783_3753335494356762624_o.jpg?_nc_cat=102&_nc_sid=8024bb&_nc_ohc=YGST6-Sy4xwAX-gLztv&_nc_ht=scontent.fagr1-1.fna&_nc_tp=6&oh=ef1926ebd045bd1efe87609e85050e51&oe=5EDD1FEE" style="width:50%">
							</div>

								<p>Name - Vishwas tripathi</p>
								<p>CSE-OSS</p>
								<p>6th semester</p>
								<p>Sap id-500055372</p>
								<p>Enrollment number-R100216100</p>

								<h2> YASH</h2>
								<div class="column">
									<img src="https://pbs.twimg.com/profile_images/1235941414057451521/KiiwzX5B_400x400.jpg" style="width:50%">
								</div>
								
                  <p>Name - Yash kumar Singh</p>
									<p>CSE-OSS</p>
									<p>6th semester</p>
									<p>Sap id-500056789</p>
								  <p>Enrollment number-R100217100</p>
	        </div>
	        	<div class="col-sm-3">
	        		<?php include 'includes/sidebar.php'; ?>
	        	</div>
	        </div>
	      </section>

	    </div>
	  </div>

  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>
