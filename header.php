<!-- HEADER -->
	<header>
		<!-- TOP HEADER -->
			<div id="top-header">
			</div>
		<!-- /TOP HEADER -->

		<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="index.php" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form action="result.php" method="get">
									<select class="input-select">
										<option value="0">All Categories</option>
									</select>
									<input class="input" placeholder="Search here" name="keyword">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<?php
									if(isset($_GET['action'])=='dangxuat'){
										unset($_SESSION['dangky']);
										header('location:register.php');
									}
								?>
								<ul class="header-links pull-right">
									<li>
										<a href="index.php?action=dangxuat">
										<?php
											if(isset($_SESSION['dangky'])):
										?>
											<i class="fa fa-sign-out" aria-hidden="true"></i>LOG OUT : 
											<?php echo $_SESSION['dangky']; ?>
										<?php else: ?>
											<i class="fa fa-sign-out" aria-hidden="true"></i>My Account
										<?php endif; ?>
										</a>
										
									</li>
									
								</ul>
								
								<ul class="header-links pull-right">
									<li>
										<?php
											if(isset($_SESSION['dangky'])):
												if(isset($_SESSION['id_member'])):
													$id_member = $_SESSION['id_member'];
													$getAdminID = $admin->getAdminID($id_member);
													foreach($getAdminID as $value):
										?>
										<a href="vieworder.php?id_member=<?php echo $value['id_member']; ?>" style="margin-right: 8px;">
											<i class="fa fa-shopping-cart" aria-hidden="true"></i>View Order 
										</a>
										<?php 
													endforeach;
												endif; 
										?>
										<?php
											else:
										?>
											<a href="index.php" style="margin-right: 8px;">
											<i class="fa fa-shopping-cart" aria-hidden="true"></i>View Order 
										</a>
										<?php
											endif; 
										?>
									</li>
								</ul>
								<?php include "cart.php"; ?>

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
		<!-- /MAIN HEADER -->
	</header>
<!-- /HEADER -->
<!-- NAVIGATION -->
<nav id="navigation">
	<!-- container -->
		<div class="container">
			<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="<?php if($page=='home'){echo 'active';} ?>"><a href="index.php">Home</a></li>
						<?php 
							foreach($getAllProtype as $value):
						?>
						<li><a href="getProtype.php?type_id=<?php echo $value['type_id'] ?>"><?php echo $value['type_name'] ?></a></li>
						<?php endforeach; ?>
						<li class="<?php if($page=='hot'){echo 'active';} ?>"><a href="content.php">Hot Deals</a></li>
					</ul>
					<!-- /NAV -->
				</div>
			<!-- /responsive-nav -->
		</div>
	<!-- /container -->
</nav>
<!-- /NAVIGATION -->